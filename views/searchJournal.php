
<html lang="eng">

<head>
    <title>Search Journal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style11.css">
    <script src="../Assests/searchJournal.js"></script>
</head>

<body>
  <div class="container">
    <h2>Search Journal</h2>
    <div class="search-book">
    <input type="text" id='term' name="term" value="" onkeyup="abc()" />
    <input type="button" name="click" value="submit" onclick="searchJournal()" />
</div>
    <div id="result"></div>
</div>
</body>



</html>
