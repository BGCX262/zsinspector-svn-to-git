<style>
    .list{
        color:gray;
        margin:2px;
    }

</style>
<table width="100%">
    <tr>
        <td align="left">
            <span class="pink_title"> Total {{$modules|@count}} module(s) found.</span>
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
            {{foreach from=$modules item=module}}
                <tr>
                    <td align="left">
                        {{$module.name}}
                    </td>
                    <td align="left">
                        {{$module.author}}
                    </td>
                    <td align="center">
                        {{$module.status}}
                    </td>
                    <td align="left">
                        {{$module.default_page}}
                    </td>
                    <td align="left">
                        {{$module.date_added}}
                    </td>
                    <td align="left">
                        {{$module.description}}
                    </td>
                    <td align="center">
                        <a title="Delete" href="{{$base_index_url}}/module/module_home/delete/{{$module.name}}" class="nav_a">DEL</a>
                    </td>
                </tr>
            {{/foreach}}
            </table>
        </td>
    </tr>
    
</table>


