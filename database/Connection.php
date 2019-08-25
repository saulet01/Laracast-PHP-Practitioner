<?php

class Connection {
  public static function make(){
    try {
      return new PDO("mysql:host=localhost; dbname=mytodo; port=3306", "root", "root");
    } catch(PDOException $e){
      die($e -> getMessage());
    }
  }
}
