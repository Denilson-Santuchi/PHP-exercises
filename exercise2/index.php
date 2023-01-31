<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Video.php';

    $v[0] = new Video("Video 1");
    $v[1] = new Video("Video 2");
    $v[2] = new Video("Video 3");

    print_r($v);

    require_once 'Viewer.php';

    $v = new Viewer("test", 25, "male", "test.Gameplays");

    print_r($v);
    ?>
    </pre>
</body>

</html>