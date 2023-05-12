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
    <link rel="stylesheet" href="../styles/hakkimda.css" />
    <link rel="stylesheet" href="../styles/index.css" />
    <title>Hakkımda</title>
  </head>
  <body>
    <div class="my-grid">
      <header
        class="header-container"
      >
        <h1>HAKKIMDA</h1>
        <div class="links">
          <a href="../ozgecmis/index.php">Öz Geçmiş</a>
          <a href="../sehrim/index.php">Şehrim</a>
        </div>
      </header>

      <main class="main-content">
        <span>
          <p class="welcome">Hoşgeldin <?php echo $_SESSION['name'] ?></p>
        </span>
        <section class="content-container">
          <img class="my-photo" src="../me.jpg" alt="my photo"/>
          <p class="hakkimda-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quam
            minus sapiente optio officia minima eum molestiae sit id ea libero
            error modi quos consectetur, voluptatibus dolor! Quasi rerum
            laboriosam repellendus id libero consectetur dicta debitis beatae
            veritatis incidunt earum, culpa dignissimos, minima perspiciatis
            magni porro illo hic? Aliquam odio qui sunt eaque accusamus
            perspiciatis, porro quam vero adipisci! Corporis?
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