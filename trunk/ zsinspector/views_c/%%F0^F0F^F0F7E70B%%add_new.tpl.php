<?php /* Smarty version 2.6.14, created on 2009-08-20 00:12:25
         compiled from ../modules/module/views/add_new.tpl */ ?>

<fieldset >
    <legend class="pink_span">Add New Module</legend>
    <form method="post" action="<?php echo $this->_tpl_vars['base_index_url']; ?>
/module/module_home/add_module">
    <table>
        <tr>
            <td class="right_align">
                Module Name:
            </td>
            <td>
                <input type="text" name="name"> *
            </td>
        </tr>
        <tr>
            <td class="right_align">
                Default controller:
            </td>
            <td>
                <input type="text" value="module_home" name="default">
            </td>
        </tr>
        <tr>
            <td class="right_align">
                Author Name:
            </td>
            <td>
                <input type="text"  name="author"> *
            </td>
        </tr>
        <tr>
            <td class="right_align">
                Status:
            </td>
            <td>
                <input type="radio" name="status" value="1">Online
                <input type="radio" name="status" value="0" checked>Offline
            </td>
        </tr>
        <tr>
            <td class="right_align">
                Description:
            </td>
            <td>
                <textarea rows="2" cols="20" name="description"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <input type="submit" value="Add">
            </td>
        </tr>
    </table>
    
</form>

</fieldset>