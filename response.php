<?php
$frase = $_GET['testo'];
$parola = $_GET['parola'];

$censura = str_replace("$parola", "***", "$frase");
$lungCensura = str_replace("*", "", $censura);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Badwords</title>
</head>

<body>
    <div class="container w-50 text-center">
        <p class="my-5 fw-bold fs-3">La frase che hai inserito contiene
            <?php echo strlen("$frase") ?> caratteri ed è la seguente:
        </p>
        <div class="my-5 fw-bold">
            <p>
                <?php echo "$frase" ?>
            </p>
        </div>
        <p class="my-5 fw-bold fs-3">La frase con le parole censurate contiene adesso
            <?php echo strlen("$lungCensura") ?> caratteri ed è la seguente:
        </p>
        <div class="my-5 fw-bold">
            <p class="text-danger">
                <?php echo "$censura" ?>
            </p>
        </div>
        <a href="./index.php"><button class="btn btn-primary">Censura ancora</button></a>
    </div>
</body>

</html>