<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connect
 *
 * @author hb
 */
class Connect {
   public $server ='localhost';
   public$dbname = 'blogv1' ;
   public $user ='blogv1' ;
   public $pwd ='0408' ;
   
   function __construct($server, $dbname, $user, $pwd) {
       $this->server = $server;
       $this->dbname = $dbname;
       $this->user = $user;
       $this->pwd = $pwd;
   }

    
    
}
