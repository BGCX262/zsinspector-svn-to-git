<?php /* Smarty version 2.6.14, created on 2009-08-20 00:17:19
         compiled from ../modules/module/views/module_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '../modules/module/views/module_home.tpl', 11, false),)), $this); ?>
<style>
    .list{
        color:gray;
        margin:2px;
    }

</style>
<table width="100%">
    <tr>
        <td align="left">
            <span class="pink_title"> Total <?php echo count($this->_tpl_vars['modules']); ?>
 module(s) found.</span>
        </td>
    </tr>
    <tr>
        <td align="left">
            <table class="list" width="90%" cellpadding="0" cellspacing="0">
                <tr>
                    <th align="left">
                        Name
                    </th>
                    <th align="left">
                        Author
                    </th>
                    <th align="center">
                        Status
                    </th>
                    <th align="left">
                        Default
                    </th>
                    <th align="left">
                        Date Added
                    </th>
                    <th align="left">
                        Description
                    </th>
                    <th align="center">
                        Action
                    </td>
                </tr>
            <?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
                <tr>
                    <td align="left">
                        <?php echo $this->_tpl_vars['module']['name']; ?>

                    </td>
                    <td align="left">
                        <?php echo $this->_tpl_vars['module']['author']; ?>

                    </td>
                    <td align="center">
                        <?php echo $this->_tpl_vars['module']['status']; ?>

                    </td>
                    <td align="left">
                        <?php echo $this->_tpl_vars['module']['default_page']; ?>

                    </td>
                    <td align="left">
                        <?php echo $this->_tpl_vars['module']['date_added']; ?>

                    </td>
                    <td align="left">
                        <?php echo $this->_tpl_vars['module']['description']; ?>

                    </td>
                    <td align="center">
                        <a title="Delete" href="<?php echo $this->_tpl_vars['base_index_url']; ?>
/module/module_home/delete/<?php echo $this->_tpl_vars['module']['name']; ?>
" class="nav_a">DEL</a>
                    </td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
            </table>
        </td>
    </tr>
    
</table>

