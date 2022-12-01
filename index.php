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
        <p class="my-5 display-3">Tool per censurare parole</p>
        <form action="./response.php" method="get">
            <div class="my-5">
                <label for="textarea" class="form-label fw-bold fs-3">Inserisci un testo</label>
                <textarea class="form-control" id="testo" name="testo"></textarea>
            </div>
            <div class="my-5">
                <label for="word" class="form-label fw-bold fs-3">Parole da censurare</label>
                <input type="text" class="form-control" id="parola" name="parola">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
</body>

</html>