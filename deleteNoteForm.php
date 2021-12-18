<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Видалення нотатки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="note_border" action="deleteNote.php" method="post">
        <label class="float_left margin_input">ID нотатки:</label><input class="float_left margin_input id_input" name="id" type="text"><br>
        <input class="margin_input" type="submit" value="Видалити нотатку">
    </form>

    <?php
        include_once("index.php");
    ?>

</body>
</html>
