<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <title>zeckoShop 2.0 Installer/Inspector</title>
        <meta name="description" content="">
            <meta name="keywords" content="">
                <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
                <meta http-equiv="Content-Style-Type" content="text/css" />
                {{if isset($xajax)}}
                {{$xajax}}
                {{/if}}

                <link type="text/css" rel="stylesheet" href="{{$stylesheet_location}}{{$current_controller}}.css">
                    <link type="text/css" rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/treeview/assets/skins/sam/treeview.css">
                        <link type="text/css" rel="stylesheet" href="{{$stylesheet_location}}main.css">
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
                                                    {{foreach from=$menu item=m}}
                                                    <tr>
                                                        <td align="left">
                                                            {{$m}}
                                                        </td>
                                                    </tr>
                                                    {{/foreach}}
                                                </table>
                                            </div>

                                        </td>
                                        <td align="center" valign="top">
                                            <table class="main_table" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td align="center" valign="top" style="height:20px;">
                                                        {{include file="header.tpl"}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top">
                                                        {{include file="body.tpl"  }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" valign="top">
                                                        {{include file="footer.tpl"}}
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
                                                            {{if $msg<>""}}
                                                                {{$msg}}
                                                             {{else}}
                                                                --
                                                             {{/if}}
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
                                                             {{if $btns<>""}}
                                                                {{$btns}}
                                                             {{else}}
                                                                --
                                                             {{/if}}
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
