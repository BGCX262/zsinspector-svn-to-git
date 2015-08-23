<?php /* Smarty version 2.6.14, created on 2009-08-20 01:02:43
         compiled from index.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <title>zeckoShop 2.0 Installer/Inspector</title>
        <meta name="description" content="">
            <meta name="keywords" content="">
                <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
                <meta http-equiv="Content-Style-Type" content="text/css" />
                <?php if (isset ( $this->_tpl_vars['xajax'] )): ?>
                <?php echo $this->_tpl_vars['xajax']; ?>

                <?php endif; ?>

                <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['stylesheet_location'];  echo $this->_tpl_vars['current_controller']; ?>
.css">
                    <link type="text/css" rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/treeview/assets/skins/sam/treeview.css">
                        <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['stylesheet_location']; ?>
main.css">
                            <script src = "http://yui.yahooapis.com/2.7.0/build/yahoo-dom-event/yahoo-dom-event.js" ></script>
                            <script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/dragdrop/dragdrop-min.js"></script>

                            </head>

                            <body class="yui-skin-sam" >
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="right" style="width:100px;" valign="top">
                                            <div class="menubar" id="menubar" style="text-align:left">
                                                <table cellspacing="1" width="100%">
                                                    <tr>
                                                        <td>
                                                            <div id="mover" style="cursor:pointer" class="pink_span"">Module Navigation</div>
                                                        </td>
                                                    </tr>
                                                    <?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
                                                    <tr>
                                                        <td align="left">
                                                            <?php echo $this->_tpl_vars['m']; ?>

                                                        </td>
                                                    </tr>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </table>
                                            </div>

                                        </td>
                                        <td align="center" valign="top">
                                            <table class="main_table" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td align="center" valign="top" style="height:20px;">
                                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top">
                                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "body.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" valign="top">
                                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td align="left" style="width:100px;" valign="top">
                                            <div class="messagebar" id="messagebar" >
                                                <table cellspacing="1" width="100%">
                                                    <tr>
                                                        <td>
                                                            <div id="msgbarmover" style="cursor:pointer" class="violet_span">System Messages</div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left">
                                                            <?php if ($this->_tpl_vars['msg'] <> ""): ?>
                                                                <?php echo $this->_tpl_vars['msg']; ?>

                                                             <?php else: ?>
                                                                --
                                                             <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </div>
                                                <br>
                                                  <div class="navbar" id="navbar" >
                                                <table cellspacing="1" width="100%">
                                                    <tr>
                                                        <td>
                                                            <div id="navbarmover" style="cursor:pointer" class="orange_span">Command List</div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left">
                                                             <?php if ($this->_tpl_vars['btns'] <> ""): ?>
                                                                <?php echo $this->_tpl_vars['btns']; ?>

                                                             <?php else: ?>
                                                                --
                                                             <?php endif; ?>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </td>

                                    </tr>
                                </table>
                                <script type="text/javascript">
                                    var dd,dd2,dd3;
                                    YAHOO.util.Event.onDOMReady(function(e) {
                                        dd = new YAHOO.util.DD("menubar");
                                        dd.setHandleElId("mover");
                                        dd2 = new YAHOO.util.DD("messagebar");
                                        dd2.setHandleElId("msgbarmover");
                                        dd3 = new YAHOO.util.DD("navbar");
                                        dd3.setHandleElId("navbarmover");
                                    });

                                </script>

                            </body>

                            </html>