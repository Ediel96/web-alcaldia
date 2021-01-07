<?php
    class db {

        public function conectDB(){
            $dbHost = 'localhost';
            $dbUser = 'postgres';
            $dbPass = 'ECCI2020';
            $dbName = 'appalcaldia2';
            $puerto = "5432";           
            $dbConection = new PDO("pgsql:host=$dbHost;port=$puerto;dbname=$dbName", $dbUser, $dbPass);
            $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            $dbConection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbConection;
        }
    }
    