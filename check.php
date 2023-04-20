<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>確認画面</title>
</head>

<body>
<article id="survey">
  <form action="#" method="post">
    <fieldset>
      <legend>入力確認</legend>
      <p><?php print(htmlspecialchars($_POST['my_name'],ENT_QUOTES)); ?>様の登録内容は、下記の内容でよろしいでしょうか？</p>
      <dl>
        <dt>氏名：</dt>
        <dd>
          <?php print(htmlspecialchars($_POST['my_name'],ENT_QUOTES)); ?>
        </dd>

        <dt>性別：</dt>
        <dd>
          <?php print(htmlspecialchars($_POST['gender'],ENT_QUOTES)); ?>
        </dd>

        <dt>年齢：</dt>
        <dd>
          <?php print(htmlspecialchars($_POST['age'],ENT_QUOTES)); ?> 歳
        </dd>

        <dt>郵便番号：</dt>
        <dd>
          <?php print(htmlspecialchars('〒'.$_POST['zip1'].'-'.$_POST['zip2'],ENT_QUOTES)); ?>
        </dd>

        <dt>Eメールアドレス：</dt>
        <dd>
          <?php print(htmlspecialchars($_POST['email'],ENT_QUOTES)); ?>
        </dd>

        <dt>一番好きなラーメン：</dt>
        <dd>
          <?php print(htmlspecialchars($_POST['favorite'],ENT_QUOTES)); ?>
        </dd>

        <dt>お好きなトッピング：</dt>
        <dd>
          <ul>
          <?php
            foreach($_POST['topping'] as $topping){
              print('<li>'.htmlspecialchars($topping,ENT_QUOTES).'</li>');
            }
          ?>
          </ul>
        </dd>

        <dt>ご意見・ご感想：</dt>
        <dd>
          <?php print(htmlspecialchars($_POST['impression'],ENT_QUOTES)); ?>
        </dd>
      </dl>
      <p>
        <input type="submit" value="確定">
        <input type="button" value="修正" onClick="history.back();">
      </p>
    </fieldset>
  </form>
</article>
</body>
</html>
