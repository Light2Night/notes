<?php

include_once('db.php');

$id = $_POST['id'];

$sql = "DELETE FROM notes WHERE notes.id = '$id'";

if($mysqli->query($sql)){
    echo "Нотатку видалено успішно";
}
else {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
}

include_once("index.php");

?>