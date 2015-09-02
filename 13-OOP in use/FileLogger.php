<?php
include_once "LoggerInterface.php";

class FileLogger implements LoggerInterface{

    public function log( $data )
    {
        print_r($data);
    }
}

