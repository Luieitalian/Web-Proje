<?php if (preg_match("/^[a-z]{1}[0-9]{9}\@sakarya\.edu\.tr$/",$_POST['name']) && !strcmp(substr($_POST['name'],0,10),$_POST['password'])) {
  session_start();
  $_SESSION['name'] = $_POST['password'];
  header("Location: http://berkepite.great-site.net/hakkimda/index.php");
}
else {
  header("Location: http://berkepite.great-site.net/index.php");
}
?>