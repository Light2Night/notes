<?php

include_once('db.php');

$text = $_POST['text'];

$sql = "INSERT INTO notes (id, note) VALUES (NULL, '$text')";

if($mysqli->query($sql)){
    echo "Нотатку додано успішно";
}
else {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
}

include_once("index.php");
//UPDATE `notes` SET `note` = 'Деякий додатковий текст' WHERE `notes`.`id` = 4;
?>