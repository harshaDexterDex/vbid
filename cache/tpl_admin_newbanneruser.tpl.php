<?php $this->_tpl_include('header.tpl'); ?>
    	<div style="width:25%; float:left;">
            <div style="margin-left:auto; margin-right:auto;">
            	<?php $this->_tpl_include('sidebar-' . ((isset($this->_rootref['CURRENT_PAGE'])) ? $this->_rootref['CURRENT_PAGE'] : '') . '.tpl'); ?>
            </div>
        </div>
    	<div style="width:75%; float:right;">
            <div class="main-box">
            	<h4 class="rounded-top rounded-bottom"><?php echo ((isset($this->_rootref['L_25_0011'])) ? $this->_rootref['L_25_0011'] : ((isset($MSG['25_0011'])) ? $MSG['25_0011'] : '{ L_25_0011 }')); ?>&nbsp;&gt;&gt;&nbsp;<?php echo ((isset($this->_rootref['L__0008'])) ? $this->_rootref['L__0008'] : ((isset($MSG['_0008'])) ? $MSG['_0008'] : '{ L__0008 }')); ?>&nbsp;&gt;&gt;&nbsp;<?php echo ((isset($this->_rootref['L__0026'])) ? $this->_rootref['L__0026'] : ((isset($MSG['_0026'])) ? $MSG['_0026'] : '{ L__0026 }')); ?></h4>
				<form name="newuser" action="" method="post">
<?php if ($this->_rootref['ERROR'] != ('')) {  ?>
					<div class="error-box"><b><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></b></div>
<?php } ?>
                    <table width="98%" cellpadding="0" cellspacing="0" class="blank">
                    <tr>
                    	<td><?php echo ((isset($this->_rootref['L_302'])) ? $this->_rootref['L_302'] : ((isset($MSG['302'])) ? $MSG['302'] : '{ L_302 }')); ?></td>
                        <td><input type="text" name="name" value="<?php echo (isset($this->_rootref['NAME'])) ? $this->_rootref['NAME'] : ''; ?>"></td>
                    </tr>
                    <tr>
                    	<td><?php echo ((isset($this->_rootref['L__0022'])) ? $this->_rootref['L__0022'] : ((isset($MSG['_0022'])) ? $MSG['_0022'] : '{ L__0022 }')); ?></td>
                        <td><input type="text" name="company" value="<?php echo (isset($this->_rootref['COMPANY'])) ? $this->_rootref['COMPANY'] : ''; ?>"></td>
                    </tr>
                    <tr>
                    	<td><?php echo ((isset($this->_rootref['L_107'])) ? $this->_rootref['L_107'] : ((isset($MSG['107'])) ? $MSG['107'] : '{ L_107 }')); ?></td>
                        <td><input type="text" name="email" value="<?php echo (isset($this->_rootref['EMAIL'])) ? $this->_rootref['EMAIL'] : ''; ?>"></td>
                    </tr>
					</table>
                    <input type="hidden" name="csrftoken" value="<?php echo (isset($this->_rootref['_CSRFTOKEN'])) ? $this->_rootref['_CSRFTOKEN'] : ''; ?>">
                    <input type="hidden" name="action" value="insert">
                    <input type="submit" name="act" class="centre" value="<?php echo ((isset($this->_rootref['L_569'])) ? $this->_rootref['L_569'] : ((isset($MSG['569'])) ? $MSG['569'] : '{ L_569 }')); ?>">
				</form>
            </div>
        </div>
<?php $this->_tpl_include('footer.tpl'); ?>