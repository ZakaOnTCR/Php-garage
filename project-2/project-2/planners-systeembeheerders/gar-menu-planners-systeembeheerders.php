<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepagina</title>
    <link rel="stylesheet" href="../main.css">
    <link href="HTTPS://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="HTTPS://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="bovenste-homepagina"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="gar-home.php">AOF GARAGE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Klant
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="gar-create-klant1.php">create</a></li>
                        <li><a class="dropdown-item" href="gar-read-klant.php">read</a></li>
                        <li><a class="dropdown-item" href="gar-update-klant1.php">update</a></li>
                        <li><a class="dropdown-item" href="gar-delete-klant1.php">delete</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Auto
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="gar-create-auto1.php">create</a></li>
                        <li><a class="dropdown-item" href="gar-read-autoklant.php">read auto’s eigenaren</a></li>
                        <li><a class="dropdown-item" href="gar-read-auto.php">read</a></li>
                        <li><a class="dropdown-item" href="gar-update-auto1.php">update</a></li>
                        <li><a class="dropdown-item" href="gar-delete-auto1.php">delete</a></li>
                        <li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        gebruiker
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="gar-create-gebruiker1.php">create</a></li>
                        <li><a class="dropdown-item" href="gar-read-gebruikers.php">read</a></li>
                        <li><a class="dropdown-item" href="gar-update-gebruiker1.php">update</a></li>
                        <li><a class="dropdown-item" href="gar-delete-gebruiker1.php">delete</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn-klant"><a href="../gar-inloggen1.php">UITLOGGEN</a></button>
            </form>
        </div>
    </div>
</nav>
</body>
</html>