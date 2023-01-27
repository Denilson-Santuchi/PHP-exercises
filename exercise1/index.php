<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'Person.php';
    $person = new Person("Denilson Santuchi", 22, "Masculino");
    $person->details();

    echo "<br></br>";

    require_once 'Book.php';
    $book = new Book("Harry Potter and the Philosopher's Stone", "j. k. Rolling", 223, $person->getName());
    $book->open();
    $book->leafThrough();
    $book->nextPage();
    $book->backPage();
    $book->close();
    $book->details();
    ?>
</body>

</html>