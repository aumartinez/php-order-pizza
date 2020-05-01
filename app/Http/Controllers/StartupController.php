<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StartupController extends Controller
{
    protected $rows = array();
    protected $conx;
    
    public function __construct() {
      session_start();
    }
  
    public function index(){
      $sql = "CREATE TABLE IF NOT EXISTS accounts (
                  id INT NOT NULL AUTO_INCREMENT,
                  account_name VARCHAR(50) NOT NULL,
                  PRIMARY KEY (id),
                  UNIQUE (account_name)
                ) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci AUTO_INCREMENT = 1;";
                
      $this->set_query($sql);
      
      echo "check";
    }
    
    protected function open_link() {
      $this->conx = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($this->conx->connect_errno) {
          error_log("Connection failed");
          $_SESSION["error"][] = "Failed to connect to MySQL: " . $this->conx->connect_error;
          exit();
        }
        
        return $this->conx;
    }
    
    protected function close_link() {
        $this->conx->close();
    }
    
    protected function set_query($sql) {
        $this->open_link();
        $result = $this->conx->query($sql);
        
        if (!$result) {
          error_log("Query failed " . $sql);
          $_SESSION["error"][] = "Query error: " . $this->conx->error;
        }
        
        $this->close_link();
      }
      
      protected function set_multyquery($sql) {
        $this->open_link();
        $result = $this->conx->multi_query($sql);
        
        if (!$result) {
          error_log("Query failed: " . $sql);
          $_SESSION["error"][] = "Query error: " . $this->conx->error;      
        }
        
        $this->close_link();
      }
}
