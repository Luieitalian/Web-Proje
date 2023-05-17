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
          <img class="image my-photo" src="../assets/me.jpg" alt="My Photo" />
          <p class="text hakkimda-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quam
            minus sapiente optio officia minima eum molestiae sit id ea libero
            error modi quos consectetur, voluptatibus dolor! Quasi rerum
            laboriosam repellendus id libero consectetur dicta debitis beatae
            veritatis incidunt earum, culpa dignissimos, minima perspiciatis
            magni porro illo hic? Aliquam odio qui sunt eaque accusamus
            perspiciatis, porro quam vero adipisci! Corporis?
          </p>
        </section>
        <section class="content-container video-game">
          <img
            class="image videogame-image"
            src="../assets/videogameimage.jpg"
            alt="Video Game Image"
          />
          <p class="text videogame-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
            odio odit, quis perspiciatis velit nobis inventore. Quidem earum
            voluptatibus sequi, architecto excepturi hic doloremque accusamus
            optio. Soluta optio qui vero?
          </p>
        </section>
        <section class="content-container research">
          <img class="image" src="../assets/research.jpg" alt="Research Image" />
          <p class="text research-text">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla
            tenetur esse dolor! Accusantium, neque dignissimos molestiae
            obcaecati eos officiis. Consequatur velit quod iure vel earum, sit
            delectus ab pariatur expedita, amet molestias, similique magnam
            debitis quam eligendi deleniti assumenda aspernatur ipsam
            perspiciatis ut? Error ab architecto quas reiciendis doloribus
            expedita.
          </p>
        </section>
        <section class="content-container poker-night">
          <img class="image" src="../assets/poker_night.jpg" alt="Poker Night" />
          <p class="text poker-night-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
            beatae sit, tempora velit totam explicabo maiores, quis delectus
            quaerat aperiam ullam! Sapiente ipsum sequi ea vel quas, dolores
            ducimus earum nemo aspernatur, voluptatum, delectus tempore
            perspiciatis explicabo beatae nobis mollitia ullam officia cumque.
            Dolores eum vel, quo iure quis veritatis asperiores sit soluta
            similique commodi deleniti officia modi dicta porro illum fugit,
            accusamus sunt illo ab consequuntur? Aspernatur deleniti reiciendis
            eius neque assumenda? Sapiente quis natus beatae, dolores veniam ad
            id aspernatur deleniti et eius ab quas quibusdam repellendus quasi!
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