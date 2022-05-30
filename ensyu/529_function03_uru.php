<?php   #529_function03_uru.php

    function isleap($year)
    {
        $ret = FALSE;
        if($year % 4 == 0) $ret = TRUE;
        if($year % 100 == 0) $ret = FALSE;
        if($year % 400 == 0) $ret = TRUE;
        return $ret;     
    }

    echo isleap(1996);

?>