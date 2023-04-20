<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>ラーメン店アンケート</title>
</head>

<body>
<article id="survey">
  <form action="./check.php" method="post">
    <fieldset>
      <legend>ラーメン店アンケート</legend>
      <p><span class="comment">※</span>は必須項目です</p>
      <dl>
        <dt>氏名<span class="comment">※</span>：</dt>
        <dd>
          <input type="text" id="my_name" name="my_name" size="20" maxlength="20" placeholder="全角10文字まで" required>
        </dd>

        <dt>性別：</dt>
        <dd>
          <label><input type="radio" id="gender_0" name="gender" value="男" checked>男性</label>
          <label><input type="radio" id="gender_1" name="gender" value="女">女性</label>
        </dd>

        <dt>年齢：</dt>
        <dd>
          <select id="age" name="age">
          <?php
            for($i = 5; $i <= 80; $i++){
              print('<option value="'.$i.'">'.$i.'</option>');
            }
          ?>
          </select>歳
        </dd>

        <dt>郵便番号：</dt>
        <dd>〒
          <input type="number" id="zip1" name="zip1" max="999" placeholder="3桁">
          -
          <input type="number" id="zip2" name="zip2" max="9999" placeholder="4桁">
        </dd>

        <dt>Eメールアドレス<span class="comment">※</span>：</dt>
        <dd>
          <input type="email" id="email" name="email" size="50" maxlength="255" placeholder="半角で入力してください" required>
        </dd>

        <dt>一番好きなラーメン：</dt>
        <dd>
          <select id="favorite" name="favorite">
          <?php
            $ramens = array('醤油ラーメン','塩ラーメン','豚骨ラーメン','味噌ラーメン');
            foreach($ramens as $ramen){
              print('<option value="'.$ramen.'">'.$ramen.'</option>');
            }
          ?>
          </select>
        </dd>

        <dt>お好きなトッピング(複数選択可)：</dt>
        <dd>
        <?php
          $toppings = array('メンマ','チャーシュー','焼きのり','煮玉子','ネギ');
          $i = 0;
          foreach($toppings as $topping){
            print('<label><input type="checkbox" id="topping_'.$i.'" name="topping[]" value="'.$topping.'">'.$topping.'</label> ');
            $i++;
          }
        ?>
        </dd>

        <dt>ご意見・ご感想：</dt>
        <dd>
          <textarea id="impression" name="impression" rows="5" cols="50" placeholder="ご自由にお書きください"></textarea>
        </dd>
      </dl>
      <p>
        <input type="submit" value="送信">
        <input type="reset" value="取消">
      </p>
    </fieldset>
  </form>
</article>
</body>
</html>
