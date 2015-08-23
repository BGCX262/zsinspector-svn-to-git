{{if $global_page_error<>""}}
    <div id="global_page_erros">
         <div class="hd">{{$err_header}}</div>
         <div class="bd" style="text-align:left"><ol>{{$global_page_error}}</ol></div>
         <div class="ft">{{$err_footer}}</div>
    </div>
    <script type="text/javascript" >
        YAHOO.util.Event.onDOMReady(function(){
            var tw = new NEWGENBD.Windows;
            pop = tw.markupPanel('global_page_erros', "400px");
            pop.show();
        });
    </script>
{{/if}}