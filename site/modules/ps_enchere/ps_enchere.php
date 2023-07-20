<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
 
class Ps_Enchere extends Module
{
    public function __construct()
    {
        // Définit le nom du module, c'est l'identifiant interne qui doit porter le même nom que le dossier du module.
		$this->name = 'ps_enchere';
        // Définit à quel onglet appartient ce module dans la liste des modules
		$this->tab = 'front_office_features';
		// Version du module
        $this->version = '1.0.0';
		// Spécifie l'auteur du module
        $this->author = 'Gabriele Cassano';
		// Indique s'il faut créer une instance du module au chargement de la liste des modules installés dans Prestashop, elle peut être utile si on affiche un avertissement sur la page 
		// des modules
        $this->need_instance = 0;
		// Définit avec quelle version de Prestashop le module est compatible. 
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
		// Indique qu'on utilisera le système de rendu de Boostrap pour ce module.
        $this->bootstrap = true;
		// Appelle le constructeur de la classe parents, le Module pour exécuter la méthode constructeur de base.
        parent::__construct();
		// Définit le nom afiché dans la liste de modules
        $this->displayName = $this->l('Enchère');
        // Message de confirmation optionnel à afficher lors de la désinstallation
	    $this->description = $this->l('Liens vers la vente aux enchères');
		// Message de confirmation optionnel à afficher lors de la désinstallation.
        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');
 
        if (!Configuration::get('PS_ENCHERE_PAGENAME')) {
            $this->warning = $this->l('Aucun nom fourni');
        }
    }
	
	// Installation du module
	
	// Une fois l'installation réalisée, on aura inscrit le module aux hooks "leftColumn" et "header" et créé un nouveau réglage dans la base de données "PS_ENCHERES_PAGENAME".
	public function install()
	{
		// On ajoute la valeur de configuration PS_ENCHERES_PAGENAME et on inscrit le module à des hooks spécifiques à l'installation.
		if (Shop::isFeatureActive()) {
			Shop::setContext(Shop::CONTEXT_ALL);
		}
 
		// Afficher du contenu sur la boutique
		if (!parent::install() ||
			// On utilise 2 hooks auxquels le module s'inscrit à l'installation
			!$this->registerHook('leftColumn') ||
			!$this->registerHook('header') ||
			!Configuration::updateValue('PS_ENCHERE_PAGENAME', 'Enchères')
		) {
			return false;
		}
	 
		return true;
	}
	
	// Désinstallation du module
	public function uninstall()
	{
		// On vérifie que "uninstall" retourne "true" et pareil pour la méthode de suppression du réglage "Configuration::deleteByName".
		if (!parent::uninstall() ||
			!Configuration::deleteByName('PS_ENCHERE_PAGENAME')
		) {
			return false;
		}
	 
		return true;
	}
	
	// Création d'une vue de configuration 
	
	// On doit utiliser la méthode "getContent()" pour que Prestashop sache que le module dispose d'une page de configuration, elle retournera un formulaire accessible par l'utilisateur.
	public function getContent()
	{
		$output = null;
		// Tools::isSubmit : vérifie si le formulaire a été envoyé ou non en fonction du nom du bouton de validation (btnSubmit), si c'est pas le cas, on affiche le formulaire sion il gère les informations envoyées par le formulaire.
		if (Tools::isSubmit('btnSubmit')) {
			// On récupère la valeur de PS_ENCHERES_PAGENAME avec strval(Tools::getValue())
			$pageName = strval(Tools::getValue('PS_ENCHERES_PAGENAME'));
	 
			// On teste cette valeur en regardant si elle existe et si elle n'est pas vide 
			if (
				!$pageName||
				empty($pageName)
			) {
				$output .= $this->displayError($this->l('Invalid Configuration value'));
			} else {
				// Sinon, on met à jour la valeur avec "Configuration::updateValue" et ensuite, on affiche une confirmation de modification avec displayConfirmation
				Configuration::updateValue('PS_ENCHERES_PAGENAME', $pageName);
				// On appelle la méthode displayForm pour afficher le contenu du formulaire.
				$output .= $this->displayConfirmation($this->l('Settings updated'));
			}
		}
	 
		return $output.$this->displayForm();
	}
	
	// Création d'un formulaire dans le backoffice pour gérer les réglages du module.
	
	// getContent() gère l'affichage de la page de configuration, displayForm() gère l'affichage du formulaire. 
	public function displayForm()
	{
		// Récupère la langue par défaut, permettra de définir la langue du formulaire plus tard
		$defaultLang = (int)Configuration::get('PS_LANG_DEFAULT');	  
		
		// Initialise les champs du formulaire dans un tableau
		$form = array(
			// On crée les différents éléments qui composeront le formulaire, cela génère automatiquement du contenu HTML une fois interprété.
			'form' => array(
				// titre (legend)
				'legend' => array(
					'title' => $this->l('Settings'),
			),
			// champ (input)
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Configuration value'),
					'name' => 'PS_ENCHERES_PAGENAME',
					'size' => 20,
					'required' => true
				)
			),
			// bouton de validation (btnSubmit)
			'submit' => array(
				'title' => $this->l('Save'),
				'name'  => 'btnSubmit'
			)
		),
	);
		  
		// On utilise la classe HelperForm qui met à disposition toute une série de méthode pour créer des formulaires dans le back office, on crée un nouvel objet HelperForm qui recevra les champs définis en paramètre lors de la génération.	
		$helper = new HelperForm();
		// Module, token et currentIndex 
		$helper->module = $this;
		// Renseigne le nom du controller, ici le nom du module
		$helper->name_controller = $this->name;
		// unique spécifique à ce formulaire
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		// Indique la valeur de l’attribut action du formulaire
		$helper->currentIndex = AdminController::$currentIndex.'&amp;configure='.$this->name;
		// Langue  
		$helper->default_form_language = $defaultLang;
	    // Charge la valeur de PS_ENCHERES_PAGENAME depuis la base
		$helper->fields_value['PS_ENCHERES_PAGENAME'] = Configuration::get('PS_ENCHERES_PAGENAME');
	    // Génération du formulaire avec, en paramètre, la liste des champs à créer
		return $helper->generateForm(array($form));
	}
	
	// Gestion de l'affichage du contenu dans la colonne de gauche 
	
	// hook : préfixce chaque méthode de ce type, Diplay : indique qu'il s'agit d'un hook d'affichage, LeftColumn : représente le nom du hook 
	public function hookDisplayLeftColumn($params)
	{
		$this->context->smarty->assign([
			'ps_page_name' => Configuration::get('PS_ENCHERES_PAGENAME'),
			'ps_page_link' => $this->context->link->getModuleLink('ps_enchere', 'display')
		  ]);
	 
		  return $this->display(__FILE__, 'ps_enchere.tpl');
	}	
	
	public function hookDisplayHeader()
	{
		$this->context->controller->registerStylesheet(
			'ps_enchere',
			$this->_path.'views/css/ps_enchere.css',
			['server' => 'remote', 'position' => 'head', 'priority' => 150]
		);
	}	
}