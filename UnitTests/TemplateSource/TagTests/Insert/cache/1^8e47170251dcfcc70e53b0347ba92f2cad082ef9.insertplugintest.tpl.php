<?php /*%%SmartyHeaderCode:129815546abf6228eb9-47482552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e47170251dcfcc70e53b0347ba92f2cad082ef9' => 
    array (
      0 => '.\\templates\\insertplugintest.tpl',
      1 => 1430683106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129815546abf6228eb9-47482552',
  'variables' => 
  array (
    'foo' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5546abf6278e93_70131300',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5546abf6278e93_70131300')) {function content_5546abf6278e93_70131300($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_insert_insertplugintest')) include 'C:\\wamp\\www\\Smarty3.1-test-2 - 3.1.11\\vendor\\smarty\\smarty-phpunit-base\\UnitTests\\TemplateSource\\TagTests\\Insert/PHPunitplugins\\insert.insertplugintest.php';
?><?php echo smarty_insert_insertplugintest(array (
  'foo' => 'bar',
),$_smarty_tpl);?><?php }} ?>