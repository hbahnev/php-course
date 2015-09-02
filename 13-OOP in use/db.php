<?php

class DB{
    public static $calls = 0;

    public function __construct(){
        self::$calls++;
    }

    public static function getInstance(){

    static $db = null;

        if( $db == null )
        {
            $db = new DB();
        }
        return $db;
    }

    public static function getTotalCalls(){

        return self::$calls;
    }

    private $logger;

    public function setLogger(LoggerInterface $logger){
        $this->logger = $logger;
    }

    public function log($data){
        return $this->logger->log($data);
    }

    public function query(){
        $this->log("Error in query!");
    }
}




















?>