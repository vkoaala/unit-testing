<?php
/* Smarty version 3.1.29, created on 2017-02-07 12:14:50
  from "/var/www/html/admin/themes/default/template/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589a008a94a222_43282875',
  'file_dependency' => 
  array (
    '88d70f3dec10a3cc6ae61957753f1de2cbc5de71' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/header.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589a008a94a222_43282875 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
<title><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
 :: <?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"admin/themes/default/fontello/css/fontello.css",'order'=>-10),$_smarty_tpl);
$_smarty_tpl->tpl_vars["theme_id"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "theme_id", 0);
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_0_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_0_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
$_smarty_tpl->tpl_vars["theme_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['theme']->value['id'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "theme_id", 0);
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"admin/themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl);
}
if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0, true);
}
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_0_saved_local_item;
}
if ($__foreach_theme_0_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_0_saved_item;
}
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery','path'=>'themes/default/js/jquery.min.js'),$_smarty_tpl);?>


<!-- BEGIN get_combined -->
<!-- COMBINED_CSS -->

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'header'),$_smarty_tpl);?>

<!-- END get_combined -->

<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)) {
$_from = $_smarty_tpl->tpl_vars['head_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_1_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_1_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_1_saved_local_item;
}
if ($__foreach_elt_1_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_1_saved_item;
}
}?>
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;?>
">

<div id="the_page">

<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {?>
<div class="header_msgs">
<?php
$_from = $_smarty_tpl->tpl_vars['header_msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_2_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_2_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_2_saved_local_item;
}
if ($__foreach_elt_2_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_2_saved_item;
}
?>
</div>
<?php }?>

<div id="pwgHead">
<h1> <a href="<?php echo $_smarty_tpl->tpl_vars['U_RETURN']->value;?>
" title="<?php echo l10n('Visit Gallery');?>
" class="tiptip"> <span class="icon-home"></span><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a> </h1>

  <div id="headActions">
    <i class="icon-user"></i><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['U_RETURN']->value;?>
" title="<?php echo l10n('Visit Gallery');?>
"><i class="icon-eye"></i><span><?php echo l10n('Visit Gallery');?>
</span></a>

<a href="<?php echo $_smarty_tpl->tpl_vars['U_CHANGE_THEME']->value;?>
" class="tiptip" title="<?php echo l10n('Switch to clear or dark colors for administration');?>
"><?php if ($_smarty_tpl->tpl_vars['theme_id']->value == "clear") {?><i class="icon-moon-inv"></i><span>Dark</span><?php } elseif ($_smarty_tpl->tpl_vars['theme_id']->value == "roma") {?><i class="icon-sun-inv"></i><span>Light</span><?php }?></a>

    <a class="tiptip" href="<?php echo $_smarty_tpl->tpl_vars['U_FAQ']->value;?>
" title="<?php echo l10n('Instructions to use Piwigo');?>
"><i class="icon-help-circled"></i><span><?php echo l10n('Help Me');?>
</span></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><i class="icon-logout"></i><span><?php echo l10n('Logout');?>
</span></a>
  </div>
</div>

<div style="clear:both;"></div>

<?php if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)) {?>
<div class="header_notes">
<?php
$_from = $_smarty_tpl->tpl_vars['header_notes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_3_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_3_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_3_saved_local_item;
}
if ($__foreach_elt_3_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_3_saved_item;
}
?>
</div>
<?php }?>

<div id="pwgMain">
<?php }
}
