<?php
    class db {

        public function conectDB(){
            $dbHost = 'sopo-2020';
            $dbUser = 'appalcaldia';
            $dbPass = '@pp@7c@7D1@';
            $dbName = 'appalcaldia';
            $puerto = "5432";           
            $dbConection = new PDO("pgsql:host=$dbHost;port=$puerto;dbname=$dbName", $dbUser, $dbPass);
            $dbConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            $dbConection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbConection;
        }
    }
    