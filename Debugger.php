<?php

class Debugger {

    const DEBUG = true;

    public static function blast($msg, $args = null, $die = false) {

        if (Debugger::DEBUG) {
            if ($args) {
                $fargs = func_get_args();
                if (!is_array($fargs[1])) {
                    echo sprintf($msg, $args);
                } else {
                    echo vsprintf($msg, $args);
                }
            }else{
                echo $msg;
            }
            if($die){
                die("<hr/>Execution killed by ".get_class()."<hr/>");
            }
        }
    }

}
