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
    <link rel="stylesheet" href="../../styles/index.css" />
    <link rel="stylesheet" href="../../styles/mirasimiz.css" />
    <title>Mirasımız</title>
  </head>
  <body>
    <div class="my-grid">
      <header
        class="header-container"
      >
      <h1>MİRASIMIZ</h1>
        <div class="links">
          <a href="../../hakkimda/index.php">Hakkımda</a>
          <a href="../index.php">Şehrim</a>
        </div>
      </header>

      <main class="main-content">
        <span>
          <p class="welcome">Hoşgeldin <?php echo $_SESSION['name'] ?></p>
        </span>
        <section class="content-container">
          <img
            class="image-wide"
            src="../../assets/fatihcamii.jpg"
            alt="Fatih Camii"
          />
          <h2 class="green">Fatih Camii</h2>
          <p>
            Çağ açıp çağ kapatan büyük Osmanlı sultanı
            <span class="green">Fatih Sultan Mehmet Han</span>, 1453 yılında
            <span class="green">“Fethedilemez!”</span> denilen İstanbul’u almış;
            otuz yılı bulan saltanatı boyunca
            <span class="green">Fetret devrinde</span> hırpalanmış devletin sağlam
            temellere oturması için siyasi, sosyal, askeri ve kültürel alanda
            birçok faaliyette bulunmuştur. İmar faaliyetleri ekseninde ata yurdu
            Bursa, doğup büyüdüğü Edirne ve fethettiği şehir İstanbul başta
            olmak üzere İmparatorluk topraklarında farklı işlevlerde pek çok
            mimari yapı yükselmeye başlamıştır. Bu yapılar arasında 85’i kubbeli
            olmak üzere yaklaşık 300’e yakın cami bulunmaktadır. Çorlu’da
            bulunan ve ilçenin <span class="green">en eski camii</span> sıfatıyla
            hala ibadete açık olan Fatih Camii, onun İstanbul’u fethettiği yıl
            olan 1453 tarihinde sütannesi
            <span class="green">Daye Hatun</span> tarafından yaptırılmış ve şanlı
            fetihe atfen Fatih Sultan Mehmet Han’a armağan kılınmış özel bir
            yapıdır.
          </p>
        </section>
        <section class="content-container">
          <img
            class="image-wide"
            src="../../assets/fatihcamiici.jpg"
            alt="Fatih Camii"
          />
          <h2 class="green">Fatih Camii İç Mekan</h2>
          <p>
            Çorlu Fatih Camii 150 metre kare alan üzerinde yükselen dikdörtgen
            planlı, ana ibadet alanını tamamlayan bir son cemaat yeri ile
            hanımlar mahfili bulunan, alaturka kiremitle örtülü kırma çatıya
            sahip ve tek minareli bir yapıdır. Çatının orta yerinde bir
            <span class="green">alemi</span>
            bulunur. Kıble eksenine göre yaklaşık
            <span class="green">18 x 20</span> metre boyutlarıyla enine dikdörtgen
            bir plana sahiptir. Caminin beden duvarları moloz taş ve harç
            birlikteliğiyle alıştırma tekniği kullanılarak yapılmıştır.
            Kuzeybatı köşesinde taş kaide üzerinde yükselen tek şerefeli bir
            <span class="green">minare</span> bulunmaktadır. Minarenin şerefeye
            kadar yükselen ağırbaşlı gövdeli yapısına rağmen külah kısmı daha
            ince tutulmuştur. Evliya Çelebi Fatih Camii ile ilgili olarak meşhur
            seyahatnamesinde <span class="green">“Ebu’l Feth”</span> tabirini
            kullanmaktadır. Çorlu’da Osmanlı’dan günümüze ulaşmayı başarmış
            <span class="green">en eski</span> camidir. Cami döneminde ahşap bir
            medreseye sahipken, hamam, hazire, çeşme gibi bütünleyici yapılarla
            döneminin küçük bir külliyesi özelliklerine sahipti. Evliya Çelebi,
            ahşap medresenin 12 odalı olduğundan bahseder. Bu ahşap medrese
            XVII. Yüzyılda çıkan bir yangında kaybedilmiştir. Bu yapılar
            topluluğundan günümüze ise ancak haziresi ve güneybatı yönünde
            bahçeye bitişik yapılmış
            <span class="green">çeşmesi</span> ulaşabilmiştir.
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
