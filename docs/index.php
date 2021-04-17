<!doctype html>

<?php
  # set server root path.
  # it's not necessary if you can set environment variables directly as a server user.
  putenv("SERVER_ROOT=/var/www");
?>

<html lang="ja">
<head>
  <meta charset="utf-8">

  <title>mattu</title>

  <link rel="stylesheet" href="css/style.css">
  <!-- <script src="js/script.js"></script> -->

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body class="bg">

<div class="disp">

<ul class="tab-container">
  <li>
    <input class="tab-toggle" id="tab-1" type="radio" name="toggle" checked /> 
    <label data-title="Tab 1" class="tab l-b" for="tab-1">ツイート</label>            
    <ul class="tab-content-container">
      <li class="tab-content">
        <h3>状態:</h3>
        <?php
          $server_root = getenv('SERVER_ROOT');
          $msg = file_get_contents("${server_root}/val/countdown");
          echo "<p>${msg}</p>"
        ?>
        <h3>最終ツイート時刻:</h3>
        <?php
          $server_root = getenv('SERVER_ROOT');
          $msg = file_get_contents("${server_root}/val/last_tweet_time");
          echo "<p>";
          echo date('Y/m/d G:i:s', ${msg});
          echo "</p>";
        ?>
        <button class="button">呟く@argmattu2</button> 
      </li>
    </ul>
  </li>
  <li>
    <input class="tab-toggle" id="tab-2" type="radio" name="toggle" />
    <label class="tab" for="tab-2">辞書登録</label> 
    <ul class="tab-content-container">
      <li class="tab-content">
        <div class="inner contact">
          <div class="contact-form">
            <form id="contact-us" method="post" action="#">
              <div class="user-box">
                <input type="text" name="" required="">
                <label>言いそうなことを入力</label>
              </div>
              <div class="relative fullwidth col-xs-12">
                <button type="submit" id="submit" name="submit" class="button">登録</button> 
              </div>
              <div class="clear"></div>
            </form>
          </div>
        </div>
      </li>
    </ul>
  </li>
</ul>

</div>

</body>
</html>
