<?php

include_once('db.php');

$id = $_POST['id'];
$text = $_POST['newText'];

$sql = "UPDATE notes SET note = '$text' WHERE notes.id = '$id';";

if($mysqli->query($sql)){
    echo "Нотатку змінено успішно";
}
else {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
}

include_once("index.php");

?>