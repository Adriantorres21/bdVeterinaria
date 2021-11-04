<?php
    Class Conexion{
        private $server="localhost";
        private $usr="root";
        private $pass="root";
        private $db ="zoo";

        public function conectar(){
            $mysqli = new mysqli($this->server,
                                $this->usr,
                                $this->pass,
                                $this->db);
            return $mysqli;
        }
    }
?>
