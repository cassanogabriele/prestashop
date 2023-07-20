{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>
<div class="footer-container">
  <div id="ultimatum_footer" class="container">
    <div class="row">
        <div class="col-sm-3">
			<a href="#" target="_blank"><img src="{$urls.img_url}footer_block1_{$language.iso_code}.jpg"></a>
        </div>
        <div class="col-sm-3">		
            <img src="{$urls.img_url}footer_block2_{$language.iso_code}.jpg">
        </div>
        <div class="col-sm-3">	
            <img src="{$urls.img_url}footer_block3_{$language.iso_code}.jpg">
        </div>
        <div class="col-sm-3">	
            <img src="{$urls.img_url}footer_block4_{$language.iso_code}.jpg">
        </div>
    </div>
  </div>  	
  <div class="container">
    <div class="row">
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          {block name='copyright_link'}
			&copy; 2020 - Tous droits réservés - <a href="https://gabriel-cassano.be/">Gabriele Cassano</a>            
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>
