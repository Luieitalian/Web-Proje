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
          <a href="../ilgialanlari/index.php">İlgi Alanlarım</a>
          
        </div>
      </header>

      <main class="main-content">
        <span>
          <p class="welcome">Hoşgeldin <?php echo $_SESSION['name'] ?></p>
        </span>
        <section class="content-container">
          <img class="image my-photo" src="../assets/me.jpg" alt="My Photo" />
          <p class="text hakkimda-text">
            Ben Berke Pite! 8 Şubat 2004'te Çorlu'da dünyaya geldim. Annem ev hanımı babam ise fabrika işçisidir. Bir tane ablam vardır. Kendisi İstanbul'da bir ilkokulda psikolojik danışmanlık yapmaktadır. Hobilerim gezmek, oyun oynamak, müzik dinlemek, bisiklete binmek, dostlarımla sohbet etmektir.
          </p>
        </section>
        <section class="content-container video-game">
          <img
            class="image videogame-image"
            src="../assets/videogameimage.jpg"
            alt="Video Game Image"
          />
          <p class="text videogame-text">
            Oyun oynamak hobilerimden biridir. Kafa dağıtmak için idealdir. En sevdiğim oyunlar Europa Universalis 4 ve Hades'tir.
          </p>
        </section>
        <section class="content-container research">
          <img class="image" src="../assets/research.jpg" alt="Research Image" />
          <p class="text research-text">
            Araştırma yapmayı çok severim. Her konuda meraklıyımdır. Youtube'dan bolca bilim videosu izlerim. Veritasium, Vsauce ve Evrim Ağacı en sevdiğim kanallardır. 
          </p>
        </section>
        <section class="content-container poker-night">
          <img class="image" src="../assets/poker_night.jpg" alt="Poker Night" />
          <p class="text poker-night-text">
            Arkadaşlarımla vakit geçirmeyi ve kafa dağıtmayı çok severim. En güzel anılar bence arkadaşlarla olan anılardır. Dostlarımla olduğumda kendimi daha iyi ifade edebiliyorum.
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