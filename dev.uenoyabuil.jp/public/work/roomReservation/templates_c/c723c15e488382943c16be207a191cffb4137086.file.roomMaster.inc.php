<?php /* Smarty version Smarty-3.0.8, created on 2011-09-26 10:56:05
         compiled from "/var/www/vhosts/uenoya.hiroshimacity.jp/work/roomReservation/./templates/roomMaster.inc" */ ?>
<?php /*%%SmartyHeaderCode:19653404614e7fdbb57bdd54-44285299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c723c15e488382943c16be207a191cffb4137086' => 
    array (
      0 => '/var/www/vhosts/uenoya.hiroshimacity.jp/work/roomReservation/./templates/roomMaster.inc',
      1 => 1317001993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19653404614e7fdbb57bdd54-44285299',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/vhosts/uenoya.hiroshimacity.jp/work/lib/Smarty/libs/plugins/modifier.escape.php';
?><section class='floatLeft'>
	<form id='buildMasterForm'>
		<table class="formTable">

			<tr>
				<th>ビル名</th>
				<td>
						<div id="err_build_id" class="error hidden"></div>
						<select name="searchBuildName" id="searchBuildName">
							<option value="-1">ビル選択</option>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value['table']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('row')->value->id);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('row')->value->name);?>
</option>
							<?php }} ?>
						</select>
				</td>
			</tr>
			<tr>
				<th>部屋名</th>
				<td>
					<div id="err_name" class="error hidden"></div>
					<input type='text' id='name' name='name' />
				</td>
			</tr>
			<tr>
				<td colspan="2" class="right"><button type="button" id='regist'>新規登録</button></td>
			</tr>
		</table>
	</form>
	<div id="error" class="error hidden margin5v"></div>
	<div class="hidden right margin10"><a href="insertMode" id="insertMode">新規登録...</a></div>
</section>
<section class="floatLeft">
	<div id="dataTableContainer">
	<table id='dataTable'>
		<tr>
			<th>操作機能</th>
			<th>ビル名</th>
			<th>部屋名</th>
		</tr>
	</table>

	</div>
</section>