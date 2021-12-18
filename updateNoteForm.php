<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Редагувати нотатки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="note_border" action="updateNote.php" method="post">
        <label class="float_left margin_input">ID нотатки:</label><input name="id" type="text" class="float_left margin_input id_input"><br>
        <label class="float_left margin_input">Новий текст:</label><input name="newText" type="text" class="float_left margin_input text_input"><br>
        <input class="margin_input" type="submit" value="Редагувати нотатку">
    </form>

    <?php
        include_once("index.php");
    ?>

</body>
</html>
