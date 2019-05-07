<?php 
class DBconnector{
    var $servername = "ec2-54-197-234-117.compute-1.amazonaws.com";
    var $username = "cpswmthrtfyytc";
    var $password = "dbc2e563241035e26679e4938a872f606e46b0e2a96c11fbfd764a92487acb8d";
    var $dbname = "d9d0847k2d7foi";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>