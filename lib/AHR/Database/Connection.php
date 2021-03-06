<?php

/**
 * @version 0.1
 * @author Rajib Ahmed
 */

Class AHR_Database_Connection{

    private $_database;

    private $_host;

    private $_user;

    private $_password;

    
    private $_link;

    //public static $instance;



    private function __construct(){
        
        try{
            
               $configs = parse_ini_file('database.ini');
               $this->_database= 'nails'; //$configs[databaseName];
               $this->_host = 'localhost';//$configs[hostName];
               $this->_user= 'root';//$configs[userName];
               $this->_password='';// $configs[password];


               $this->_link= new mysqli(
                                    $this->_host,
                                    $this->_user,
                                    $this->_password,
                                    $this->_database
                                );              
           
        }
        catch(Exception $e){
            echo 'Error in setting Configs :'.$e->getMessage();
        }

        
    }



    /**
     * singeliton function
     *
     * @return classObject
     */
    public static function getInstance() {
       
        static $instance;

        if(!$instance){

             $instance = new AHR_Database_Connection();
        }

        return $instance;
    }




    /**
     *  Displayes the database host name
     */
    public function getHost() {

        return $this->_host;

    }

    /**
     *
     * @return string user of the database
     */
    public function getUser() {

        return $this->_user;

    }


    /**
     *
     * @return string Name of the Database
     */
    public function getDatabase() {

        return $this->_database;

    }

    public function getLink() {
        return $this->_link;
    }



}?>