<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Додавання нотатки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="note_border" action="insertIntoNote.php" method="post">
        <label class="float_left margin_input">Текст нотатки: </label><input class="float_left margin_input text_input" name="text" type="text"><br>
        <input class="margin_input" type="submit" value="Додати нотатку">
    </form>

    <?php
        include_once("index.php");
    ?>

</body>
</html>
