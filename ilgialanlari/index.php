<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/ilgialanlari.css" />
    <title>İlgi Alanlarım</title>
  </head>
  <body>
    <div class="my-grid">
      <header
        class="header-container"
      >
        <h1>İLGİ ALANLARIM</h1>
        <div class="links">
          <a href="../ozgecmis/index.php">Öz Geçmiş</a>
          <a href="../hakkimda/index.php">Hakkımda</a>
          <a href="../sehrim/index.php">Şehrim</a>
        </div>
      </header>

      <main class="main-content">
        <span>
          <p class="welcome">Hoşgeldin <?php echo $_SESSION['name'] ?></p>
        </span>
        <section class="content-container">
          <h2 class="movie-title"></h2>
          <img width="300" src="../assets/intersteallar.jpg" alt="Interstellar" />
          <ul>
            <li class="movie-date"></li>
            <li class="movie-director"></li>
            <li class="movie-imdb"></li>
          </ul>
          <p>
            Film izlemeyi çok severim bu sebeple interstellar adlı filmi bir API'den çektim.
          </p>
        </section>
      </main>

      <footer
        class="footer-container"
      >
        Coded with 🤍 by Berke Pite
      </footer>
    </div>
  <?php
   $script = file_get_contents('../api.js');
   echo "<script>".$script."</script>";
   ?>
  </body>
</html>