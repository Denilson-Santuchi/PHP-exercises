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
    $person = new Person("Denilson", 22, "Masculino");
    echo "<p> O(a) " . $person->getName() . " tem " . $person->getAge() . " anos e é do sexo " . $person->getSexuality() . ".</p>";
    $person->doBirthday();
    echo "<p> O(a) " . $person->getName() . " tem " . $person->getAge() . " anos e é do sexo " . $person->getSexuality() . ".</p>"
    ?>
</body>

</html>