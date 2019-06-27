<?php
class arquivo {

   public function arquivo_conn($hostname,$dbname,$username,$pw){

      $arquivo    = fopen('acesso.txt','r');
      $linha      = fgets($arquivo);

      $data       = explode(",",$linha);

      $hostname   =   $data[0]; 	
      $dbname     =   $data[1]; 	
      $username   =   $data[2]; 	
      $pw         =   $data[3];

  }   

}