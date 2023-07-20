{extends file='page.tpl'}
 
{block name="page_content"}
<p>Comme expliqué sur la page d'accueil, ce site a pour objectif de présenter les compétences acquises dans ma formation en Prestasthop : mise en place du site, traduction des menus et liens, 
personnalisation des pages, l'ajout de contenu, le configuration du site, ainsi que le développement de ce module personnalisé, pour postuler en tant que <span id="dev">&ldquo;Développeur Web&rdquo;</span>.
<p>

<p>Néanmoins, les articles d'occasion de ce site sont en vente, vous pouvez faire des offres pour chaque article sur le site de  <a href="https://www.2ememain.be">2ème main</a>, mon pseudo est <span id="pseudo">&ldquo;jimbo&rdquo;.</span></p>

<p class="personal-img">
	<img src="{$urls.img_url}mod1.jpg" alt="{l s='mod1' d='shop.Theme.Yourtheme'}" />
	<img src="{$urls.img_url}mod2.jpg" alt="{l s='mod2' d='shop.Theme.Yourtheme'}" />
	<img src="{$urls.img_url}mod3.jpg" alt="{l s='mod3' d='shop.Theme.Yourtheme'}" />
	<img src="{$urls.img_url}mod4.jpg" alt="{l s='mod4' d='shop.Theme.Yourtheme'}" />
</p>
{/block}