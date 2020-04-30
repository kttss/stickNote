<?php

    function cnx_db() {
        $pdo = new PDO( 'mysql:host=localhost;dbname=task', 'root','');    
        return $pdo;
        // $pdo = new PDO( 'mysql:host=den1.mysql4.gear.host;dbname=testphp', 'testphp','Cc2tz51!K7!4'); 
    }
    

?>