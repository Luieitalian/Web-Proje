<?php session_start(); ?>
<?php $_POST["name"]?>
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
    <link rel="stylesheet" href="../styles/iletisim.css" />
    <title>Teşekkürler</title>
  </head>
  <body>
    <div class="my-grid">
      <header
        class="header-container"
      >
        <h1>TEŞEKKÜRLER</h1>
        <div class="links">
          <a href="../ozgecmis/index.php">Öz Geçmiş</a>
          <a href="../ilgialanlari/index.php">İlgi Alanlarım</a> 
        </div>
      </header>

      <main class="main-content">
        <section class="content-container">
          <h2>Formun Alınmıştır!</h2>
          <div>
            <ul>
              <li>İsim: <?php echo $_POST["name"] ?></li>
              <li>Soyisim: <?php echo $_POST["surname"] ?></li>
              <li>Email: <?php echo $_POST["email"] ?></li>
              <li>Mesaj: <?php echo $_POST["textarea"] ?></li>
              <li>Eğitim Düzeyi: <?php echo $_POST["selection"] ?></li>
            </ul>
          </div>
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