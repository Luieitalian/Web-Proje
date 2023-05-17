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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
            dolorum quo beatae nemo distinctio at suscipit reiciendis, nesciunt
            dolor nam eos asperiores illum, voluptas porro nisi, earum alias!
            Ipsam, nostrum!
          </p>
        </section>
        <section class="content-container corlu">
          <img
            class="image"
            src="../assets/corluortaokulu.jpg"
            alt="Çorlu Ortaokulu"
          />
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
            obcaecati atque repudiandae deleniti itaque praesentium quidem! Nemo
            autem eligendi numquam cum totam aspernatur vero. Ratione quam magni
            quia unde quos?
          </p>
        </section>
        <section class="content-container mimarsinan">
          <img
            class="image"
            src="../assets/mimarsinan.jpg"
            alt="Mimar Sinan Anadolu Lisesi"
          />
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
            obcaecati atque repudiandae deleniti itaque praesentium quidem! Nemo
            autem eligendi numquam cum totam aspernatur vero. Ratione quam magni
            quia unde quos?
          </p>
        </section>
        <section class="content-container mimarsinan">
          <ul>
            <li>İngilizce seviyem iyidir.</li>
            <li>Araştırmayı, tarih okumayı çok severim.</li>
          </ul>
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
