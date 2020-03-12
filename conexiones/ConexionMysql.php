<?php
namespace conexiones\ConexionMysql;
use PDO;
/**
 * Description of ConexionMysql
 *
 * @author joseluismp2802@gmail.com
 */
class ConexionMysql {
    private $con = null;
    public function conMysql() {
        try {
//            $this->con = new PDO("mysql:host=localhost:3306;dbname=u175598429_wpds;charset=utf8mb4", "u175598429_wpds", "TMbHQYTmVX5I",
            $this->con = new PDO("mysql:host=localhost:3306;dbname=dbs;charset=utf8mb4", "webuser", "w3bu53r.5577", 
                    array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
            if (!$this->con) {
                echo 'Error de conexion al server';
            }
        } catch (\PDOException $ex) {
            echo "Error: " . $ex->getMessage();
        }
        return $this->con;
    }
    public function closeMysql(){
        $this->con = null;
    }
}
