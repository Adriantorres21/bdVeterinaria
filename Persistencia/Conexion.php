<?php
    Class Conexion{
        private $server="localhost";
        private $usr="adriantorres";
        private $pass="1234";
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