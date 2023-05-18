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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
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
          <h2 class="green">Çorlu</h2>
          <p class="text">
            Çorlu, Tekirdağ'a bağlı olan
            <span class="green">en büyük ilçedir. </span>Çorlu, İstanbul'dan
            sonra Türkiye Trakyası'ndaki (Doğu Trakya)
            <span class="green"> en büyük ikinci yerleşim yeridir. </span>
            Tekirdağ merkezine 38 km uzaklıkta olan Çorlu; Ergene havzasında,
            Trakya'nın orta yerinde, yayla yüzeyinin üstünde bir düzlükte yer
            alır. Elverişli doğal yapısı, güçlü ulaşım bağlantıları, önemli
            sanayisi, iş olanakları ve stratejik önemi ile Tekirdağ'ın en büyük
            ilçesi olan Çorlu, Türkiye'nin de
            <span class="green">en gelişmiş</span>
            ilçelerindendir. Kuzeyden Tekirdağ'ın Ergene ve Çerkezköy ilçeleri,
            doğudan İstanbul'un Silivri ilçesi, batıdan Süleymanpaşa ve Muratlı
            ilçeleri, güneyden Marmaraereğlisi ilçesi ve Marmara Denizi ile
            çevrilidir. İlçenin yüzölçümü 531 km²'dir. Şehrin nüfusu 2021 yılına
            göre 284.907
          </p>
        </section>
        <section class="content-container">
          <img
            class="image-wide"
            src="../assets/corluharita.png"
            alt="Çorlu Haritası"
          />
          <h2 class="green">Çorlu Coğrafyası</h2>
          <p class="text">
            Çorlu'nun denizden yüksekliği 193 m'dir. Yıldız Dağları'nın uzantısı
            olarak sokulan sırtlar Çorlu'nun yüksek yerlerini oluşturur. Çorlu,
            <span class="green">Yıldız Dağları’ndan</span> aşınarak,
            akarsulardan sürüklenerek gelen tortuların depolandığı bir dolgu
            bölgesidir. Ayrıca burası, Ergene Havzası ile Marmara kıyı şeridi
            arasındaki su bölümünün
            <span class="green">ayrım sınırıdır.</span> Yine Çorlu, Karadeniz
            ile Akdeniz arasında yer aldığı için bu iklim bölgelerinin
            etkisindedir. Kuzeyden inen soğuk hava ile güneydeki Akdeniz ile
            Ege’den gelen nemli-ılık hava akımları bölgenin iklim yapısını
            etkiler.
          </p>
        </section>
        <section class="content-container">
          <img class="image-wide" src="../assets/corlu2.jpg" alt="Çorlu" />
          <h2 class="green">Çorlu Gelişimi</h2>
          <p class="text">
            Çorlu'nun coğrafi konumu dolayısıyla (Avrupa ile Asya arasında bir
            köprü) özellikle sanayinin bu ilçeye akın etmesine yol açmıştır.
            İstanbul, Kocaeli, Bursa ile beraber Türkiye sanayisinde önemli yer
            almaktadır. Bundan 30 yıl öncesinde sakin bir ilçe olan Çorlu şu an
            tam anlamıyla bir <span class="green">sanayi kenti</span> görünümünü
            almıştır. Bunun sonucu olarak göç artmış ve nüfus yoğunluğu
            <span class="green">hat safhaya</span> çıkmıştır. Bu hızlı
            gelişimden ve hareketliliğinden dolayı
            <span class="green">Küçük İstanbul</span> adını bile
            yakıştırmışlardır. Türk Hava Yolları iştiraki olan AnadoluJet’in
            Çorlu Havaalanı Ankara-Çorlu Seferlerine başlamıştır. Trakya'yı
            Anadolu'ya havayolu ile bağlayan ilk ve tek havaalanı pisti Çorlu'da
            bulunmaktadır.
          </p>
        </section>
        <section class="content-container">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="../assets/corlu3.jpg"
                  class="d-block w-100"
                  alt="çorlu"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../assets/corlu2.jpg"
                  class="d-block w-100"
                  alt="çorlu"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../assets/fatihcamii.jpg"
                  class="d-block w-100"
                  alt="çorlu"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
      </main>

      <footer
        class="footer-container"
      >
        Coded with 🤍 by Berke Pite
      </footer>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
