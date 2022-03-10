<?php

    //controllo che i parametri passati nell'url non siano vuoti
    if(!empty($_GET["name"]) && !empty($_GET["mail"]) && !empty($_GET["age"])){

        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        
        if(strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)){
            echo "Accesso riuscito";
        }else{
            echo "Accesso negato";
        }

    }

?>