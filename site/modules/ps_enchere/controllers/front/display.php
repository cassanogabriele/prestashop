<?php

class ps_encheredisplayModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();
		$this->setTemplate('module:ps_enchere/views/templates/front/display.tpl');
	}
}