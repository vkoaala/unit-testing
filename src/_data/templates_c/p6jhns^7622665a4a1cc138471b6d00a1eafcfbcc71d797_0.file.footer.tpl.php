<?php
/* Smarty version 3.1.29, created on 2017-02-07 12:14:50
  from "/var/www/html/admin/themes/default/template/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589a008a9a71b1_56904715',
  'file_dependency' => 
  array (
    '7622665a4a1cc138471b6d00a1eafcfbcc71d797' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/footer.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589a008a9a71b1_56904715 ($_smarty_tpl) {
?>

</div>

<?php if (isset($_smarty_tpl->tpl_vars['footer_elements']->value)) {
$_from = $_smarty_tpl->tpl_vars['footer_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_0_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_0_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_local_item;
}
if ($__foreach_elt_0_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_item;
}
}?>

<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'])) {?>
<div id="debug">
  <?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>

<div id="footer">
  <div id="piwigoInfos">
  <?php echo l10n('Powered by');?>

  <a class="externalLink tiptip" href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" title="<?php echo l10n('Visit Piwigo project website');?>
"><span class="Piwigo">Piwigo</span></a>
  <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

  <a class="externalLink tiptip" href="<?php echo $_smarty_tpl->tpl_vars['pwgmenu']->value['WIKI'];?>
" title="<?php echo l10n('Read Piwigo Documentation');?>
"><i class="icon-book"></i><?php echo l10n('Documentation');?>
</a>
  <a class="externalLink tiptip" href="<?php echo $_smarty_tpl->tpl_vars['pwgmenu']->value['FORUM'];?>
" title="<?php echo l10n('Get Support on Piwigo Forum');?>
"><i class="icon-lifebuoy"></i><?php echo l10n('Support');?>
</a>
  </div>

  <div id="pageInfos">
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['TIME'])) {?>
    <?php echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) -
<?php }?>
    <?php echo l10n('Contact');?>

    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
  </div>

</div>
</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.tipTip','load'=>'footer','path'=>'themes/default/js/plugins/jquery.tipTip.minified.js'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.tipTip')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.tipTip'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery('.tiptip').tipTip({
  delay: 0,
  fadeIn: 200,
  fadeOut: 200
});

jQuery('a.externalLink').click(function() {
  window.open(jQuery(this).attr("href"));
  return false;
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.tipTip'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<!-- BEGIN get_combined -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'footer'),$_smarty_tpl);?>

<!-- END get_combined -->

</body>
</html><?php }
}
