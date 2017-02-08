<?php
/* Smarty version 3.1.29, created on 2017-02-07 12:42:34
  from "/var/www/html/plugins/skeleton/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589a070adc2d11_20346871',
  'file_dependency' => 
  array (
    '24c85561b56c942666aa23153af638f2c42f845d' => 
    array (
      0 => '/var/www/html/plugins/skeleton/admin.tpl',
      1 => 1486489334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589a070adc2d11_20346871 ($_smarty_tpl) {
?>
<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2><?php echo l10n('Skeleton plugin');?>
</h2>
</div>
 
<!-- Show content in a nice box -->
<fieldset>
 <legend><?php echo l10n('A minimal plugin');?>
</legend>
 
 <?php echo l10n('Hello world!');?>

</fieldset>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo '<?php ';?>echo htmlspecialchars($_SERVER["PHP_SELF"]);<?php echo '?>';?>">  
  Name: <input type="text" name="name" value="<?php echo '<?php ';?>echo $name;<?php echo '?>';?>">
  <span class="error">* <?php echo '<?php ';?>echo $nameErr;<?php echo '?>';?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo '<?php ';?>echo $email;<?php echo '?>';?>">
  <span class="error">* <?php echo '<?php ';?>echo $emailErr;<?php echo '?>';?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo '<?php ';?>echo $website;<?php echo '?>';?>">
  <span class="error"><?php echo '<?php ';?>echo $websiteErr;<?php echo '?>';?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo '<?php ';?>echo $comment;<?php echo '?>';?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php echo '<?php ';?>if (isset($gender) && $gender=="female") echo "checked";<?php echo '?>';?> value="female">Female
  <input type="radio" name="gender" <?php echo '<?php ';?>if (isset($gender) && $gender=="male") echo "checked";<?php echo '?>';?> value="male">Male
  <span class="error">* <?php echo '<?php ';?>echo $genderErr;<?php echo '?>';?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php }
}
