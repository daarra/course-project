<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Инструменты для обработки и анализа многомерных данных.">
    <title>Инструменты для анализа данных</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-xl navbar-dark fixed-top custom-bg-color custom-navbar mb-md-8">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">data insights</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Переключить навигацию">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tools.php">Инструменты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data.php">Датасеты</a>
          </li>
        </ul>
        <form class="d-flex">
          <?php
          session_start();
          if (!empty($_SESSION['user'])) {
          ?>
          <a href="profile.php"><button class="btn btn-custom" type="button">Личный кабинет</button></a>
          <?php
          } else {
           ?>
          <a href="signin.php"><button class="btn btn-custom" type="button">Войти в личный кабинет</button></a>
        <?php
        }
        ?>
      </form>
      </div>
    </div> 
  </nav>
</header>