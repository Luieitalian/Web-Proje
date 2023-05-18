<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/styles/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <title>Öz Geçmiş</title>
    <link rel="stylesheet" href="../styles/ozgecmis.css">
  </head>
  <body>
    <div class="my-grid">
      <header
      class="header-container"
      >
      <h1>ÖZ GEÇMİŞ</h1>
        <div class="links">
          <a href="../hakkimda/index.php">Hakkımda</a>
          <a href="../sehrim/index.php">Şehrim</a>
          <a href="../iletisim/index.php">İletişim</a>
        </div>
      </header>

      <main class="main-content">
        <span>
          <p class="welcome">Hoşgeldin <?php echo $_SESSION['name'] ?></p>
        </span>
        <section class="content-container unilever">
          <img
            class="image"
            src="../assets/unilever.jpg"
            alt="Unilever İş İlkokulu"
          />
          <p class="text">
            İlkokulu Ünilever İş İlkokulu'nda okudum. Burada yazı yazmayı, saymayı ve arkadaş edinmeyi öğrendim.
          </p>
        </section>
        <section class="content-container corlu">
          <img
            class="image"
            src="../assets/corluortaokulu.jpg"
            alt="Çorlu Ortaokulu"
          />
          <p class="text">
            Ortaokulu Çorlu Ortaokulu'nda okudum. Derslerim gayet iyiydi. Matematiğe olan sevgim ortaokulda başladı. İngilizceye olan merakım da ortaokul son sınıfta başladı.
          </p>
        </section>
        <section class="content-container mimarsinan">
          <img
            class="image"
            src="../assets/mimarsinan.jpg"
            alt="Mimar Sinan Anadolu Lisesi"
          />
          <p class="text">
            Liseyi Mimar Sinan Anadolu Lisesi'nde okudum. Burada üniversiteye hazırlandım. Matematiğimi ve inglizcemi olabildiğince geliştirmeye çalıştım. Şimdi ise Sakarya Üniversitesi'nde Bilgisayar Mühendisliği okuyorum.
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
