<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/index.css" />
    <title>Giriş Yap</title>
  </head>
  <body>
    <div class="wrapper">
      <main class="form-wrapper">
        <form action="validation.php" method="post">
          <label>
            <span>Kullanıcı Adı</span>
            <input
              autofocus
              required
              type="text"
              name="name"
              id="name"
              autocomplete="on"
            />
          </label>
          <label>
            <span>Şifre</span>
            <input
              required
              type="text"
              name="password"
              id="password"
              autocomplete="on"
            />
          </label>
          <div class="btn-wrapper">
            <input type="button" value="Temizle" />
            <input type="submit" value="Giriş Yap" />
          </div>
        </form>
      </main>
    </div>
  </body>
</html>
