<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Нотатки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Нотатки</h1>
    <div class="button_box align box_style note_border">
        <a href="insertIntoNoteForm.php">
            <div class="internal_button_box box_style note_border min_HW">
                <p class="button_text">Додати нотатку</p>
            </div>
        </a>

        <a href="updateNoteForm.php">
            <div class="internal_button_box box_style note_border min_HW">
                <p class="button_text">Замінити текст нотатки</p>
            </div>
        </a>

        <a href="deleteNoteForm.php">
            <div class="internal_button_box box_style note_border min_HW">
                <p class="button_text">Видалити нотатку</p>
            </div>
        </a>
    </div>

    <br><br><br><br><br><br>

    <?php
    include_once('db.php');

    $sql = 'SELECT * FROM notes;';

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит
        /* Вибірка результатів запиту  */
        
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<div class=\"note_box align box_style note_border\">");
                printf("<div class=\"internal_box box_style note_border\">");
                    printf("<h>Note ID: %s</h>", $row['id']);
                printf("</div>");

                printf("<div class=\"internal_box box_style note_border\">");
                    printf("<p>%s</p>", $row['note']); //виводимо результат на сторінку
                printf("</div>");
	        printf("</div>");
        };
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>
</body>
</html>