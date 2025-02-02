
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style11.css">
    <script src="../Assests/searchBook.js"></script>
</head>

<body>
    <div class="container">
        <h2>Search Book</h2>
        <div class="search-book">
            <input type="text" id="term" name="term" value="" onkeyup="abc()" />
            <input type="button" name="click" value="Submit" onclick="search()" />
        </div>
        <div id="result"></div>
    </div>
</body>

</html>

