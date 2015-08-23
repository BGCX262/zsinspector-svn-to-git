<?php
    /*Date-time related : ishtiaque*/
    //IMPORTANT :  DATE means DATE not TimeStamp

    function get_mysql_date_time($mkseconds=NULL){
        if($mkseconds)
            return date('Y-m-d H:i:s',$mkseconds);
        else
            return date('Y-m-d H:i:s');
    }

    function mysql_timestamp_to_date($mysql_timestamp){
        $sf =  split(" ",$mysql_timestamp);
        return $sf[0];
    }
    function mysql_to_php_date($mysql_date){
        $date_array = explode("-",$mysql_date);
        $var_year = $date_array[0];
        $var_month = $date_array[1];
        $var_day = $date_array[2];
        $var_timestamp = mktime(0,0,0,$var_month,$var_day,$var_year);
        return $var_timestamp;
    }

    function add_days($mktime,$num_of_days=1){
        return strtotime("+$num_of_days days",$mktime);
    }

    function get_formatted_date($format="D, d M Y H:i:s",$mktime=0){
        return $mktime ? date($format,$mktime) : date($format);
    }

    /*
     * return 7 for sunday and 6 for sat as per the convention of php
     * returns NULL if not a weekend day
     */
    function is_weekend($mktime){
        $day = date("N",$mktime);
        return ( $day==="7" || $day==="6" ) ? $day : NULL;
    }

    /*
     * mysql format dates A and B
     * now if A>B then return false and B>A true
     * $true_on_equal TRUE if B==A
     */
    function mdate_B_gr8r_A($mysql_date_A,$mysql_date_B,$true_on_equal=TRUE){
        $start = mysql_to_php_date($mysql_date_A);
        $end   = mysql_to_php_date($mysql_date_B);
        return $true_on_equal ? ($end>=$start ? TRUE: FALSE) : ($end>$start ? TRUE: FALSE);

    }

?>
