<?php
    /**
     * this helper has a collection of functions that outputs data
     * in the browser..mainly for debugging... : ishtiaque
     */
    function pre_dump($obj,$die=0){
        echo "<pre>";
        var_dump($obj);
        echo "</pre>";
        if($die)die();
    }

    function h($msg,$val=1){
        echo "<h$val>$msg</h$val>";
    }

    function error_span($msg){
        echo "<span style='color:red'>$msg</span>";
    }

    function last_query($die=0){
        $CI = get_instance();
        pre_dump( $CI->db->last_query());
        if($die)die();
    }

    function echo_comment($msg,$pre=0){
        echo "<!--";
        if($pre) pre_echo($msg);
        else echo $msg;
        echo "-->";
    }

    function pre_echo($msg){
        echo "<pre>$msg</pre>";
    }

?>
