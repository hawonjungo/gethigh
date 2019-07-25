<?php
namespace aitsydney;
class Database{
        protected $connection;
        protected function __construct(){
            $this -> connection = mysql_connect('localhost','website','password','data2');
        }

}
?>