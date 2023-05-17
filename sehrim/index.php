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
    <link rel="stylesheet" href="../styles/sehrim.css" />
    <title>Şehrim</title>
  </head>
  <body>
    <div class="my-grid">
      <header
        class="header-container"
      >
        <h1>ŞEHRİM</h1>
        <div class="links">
          <a href="../hakkimda/index.php">Hakkımda</a>
          <a href="mirasimiz/index.php">Mirasımız</a>
        </div>
      </header>

      <main class="main-content">
        <span>
          <p class="welcome">Hoşgeldin <?php echo $_SESSION['name'] ?></p>
        </span>
        <section class="content-container">
          <img class="image-wide" src="../assets/corlu.jpg" alt="Çorlu Şehri" />
          <h2>Çorlu</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
            ullam iure tenetur magnam recusandae? Esse possimus itaque expedita
            praesentium, accusamus sint quaerat similique impedit ab, asperiores
            ipsa minus saepe dicta.
          </p>
        </section>
      </main>

      <footer
        class="footer-container"
      >
        Coded with 🤍 by Berke Pite
      </footer>
    </div>
  </body>
</html>
