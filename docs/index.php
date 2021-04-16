<!doctype html>

<?php
  # set server root path.
  putenv("SERVER_ROOT=/var/www");
?>

<html lang="ja">
<head>
  <meta charset="utf-8">

  <title>mattu</title>

  <link rel="stylesheet" href="css/style.css?v=1.0">
  <script src="js/script.js"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

<ul class="tab-container">
  <li>
    <input class="tab-toggle" id="tab-1" type="radio" name="toggle" checked />
    <label data-title="Tab 1" class="tab l-b" for="tab-1">ツイート</label>
    <ul class="tab-content-container">
      <li class="tab-content">
        <?php
          $server_root = getenv('SERVER_ROOT');
          $msg = file_get_contents("${server_root}/val/countdown");
          echo "<p>${msg}</p>"
        ?>
        <a href="#" class="btn-flat-simple">
          <i class="fa fa-caret-right"></i>ツイート
        </a>
      </li>
    </ul>
  </li>
  <li>
    <input class="tab-toggle" id="tab-2" type="radio" name="toggle" />
    <label class="tab" for="tab-2">辞書登録</label>
    <ul class="tab-content-container">
      <li class="tab-content">
        content2
      </li>
    </ul>
  </li>
</ul>
