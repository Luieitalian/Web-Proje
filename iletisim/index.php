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
    <link rel="stylesheet" href="../styles/iletisim.css" />
    <title>İletişim</title>
  </head>
  <body>
    <div class="my-grid">
      <header
        class="header-container"
      >
        <h1>İLETİŞİM</h1>
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
        <form method="post" action="iletisim.php">
            <div class="form-wrapper">
              <label>İsim: <input id="name" name="name" type="text" /></label>
              <label
                >Soyisim: <input id="surname" name="surname" type="text"
              /></label>
              <label
                >Email: <input id="email" name="email" type="email"
              /></label>
              <label
                >Mesajın:
                <textarea id="textarea" name="textarea" type="text"></textarea>
              </label>
              <label for="selection">Eğitim Düzeyin</label>
              <select id="selection" name="selection">
                <option value="ilkokul">İlkokul</option>
                <option value="ortaokul">Ortaokul</option>
                <option value="lise">Lise</option>
                <option value="universite">Üniversite</option>
              </select>
              <div class="button">
                <button type="reset" id="temizle-btn">Temizle</button>
                <button id="gonder-btn" type="submit">Gönder</button>
              </div>
            </div>
          </form>
        </section>
      </main>

      <footer
        class="footer-container"
      >
        Coded with 🤍 by Berke Pite
      </footer>
    </div>
    <script src="../script.js"></script>
  </body>
</html>