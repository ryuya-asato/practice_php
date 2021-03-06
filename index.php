<?php
  // 三項演算子
  $greeting = null;
  $message = $greeting === null ? 'Hello' : $greeting;
  echo $message;

  // null合体演算子
  $hello = null;
  $msg = $hello ?? 'Hello';
  echo $msg;

  $score = 89;
  $messageg = '';
  if ($score >= 90) {
    $message = 'すごい！';
  } else {
    $message = 'くたばれ！';
  }
  echo $message;

  // 条件分岐による空欄チェック処理

  // 論理演算子で否定
  if (!$a) {
    // ここに処理
  }

  // 緩やかな比較演算子の使用
  if ($a == '') {
    // ここに処理
  }

  // empty関数を使用
  if (empty($a)) {
    // ここに処理
  }

  // isset関数またはis_null関数の使用
  if (isset($a)) {
    // ここに処理
  }
  if (is_null($a)) {
    // ここに処理
  }

  // is_null関数と厳密な比較演算子の組み合わせ
  if (is_null($a) || $a === '') {
    // ここに処理
  }

  // switch構文
  $message = '';
  $extension = 'svg';
  switch ($extension) {
    case 'jpg':
      $message = 'jpg画像です';
      break;
    case 'png':
      $message = 'png画像です';
      break;
    case 'gif':
      $message = 'gif画像です';
      break;
    case 'bmp':
    case 'svg':
      $message = 'bmpまたはsvg画像です';
      break;
    default:
      $message = 'その他の形式です';
  }
  echo $message;

  // exit命令とdie命令
  $score = 100;
  if ($score < 0) {
    echo 'スコアは正の数でなければなりません。';
    exit(1);
  }
  echo `スコアは：', $score, '点です。`;

  $score = 100;
  if ($score < 0) {
    die('スコアは正の数でなければなりませ。');
  }
  echo 'スコアは：', $score, '点です。';
?>

<?php
  // foreach構文　用途(配列・連想配列)
  $colors = ['赤','青','黄'];
  foreach ($colors as $color) {
    echo $color;
    echo '<br>';
  }

  $fruits = [
    'りんご' => 'apple',
    'ぶどう' => 'grape',
    'みかん' => 'orange'
  ];
  foreach ($fruits as $japanese => $english) {
    echo "日本語名：{$japanese} 英語名：{$english}";
    echo '<br>';
  }

  // リファレンス私によるforeach
  $numbers = [3, 5, -1, 2];
  foreach ($numbers as &$number) {
    if ($number < 0) {
      $number = 0;
    }
  }
  unset($number);

  print_r($numbers);

  // for構文を配列のループ処理に使う
  $lines = [
    'いろはにほへと',
    'ちりぬるを',
    'わかよたれそ'
  ];
  for ($i = 0; $i < count($lines); $i += 1) {
    echo $i + 1, '行目：', $lines[$i], PHP_EOL;
  }

  // while構文
  $num = 100;
  while ($num < 200) {
    echo $num, PHP_EOL;
    $num += 30;
  }
  echo '$numが200を超えたためループを抜けました。';

  // break命令、continue命令
  $total = 0;
  $numbers = [10, 2, -5, 3, 'abc', 6, 1];
  echo '正の整数を対象に配列の要素を足し算します。', PHP_EOL;
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      echo "数値ではない値を検知したため計算を中断します。(対象値：{$number})", PHP_EOL;
      break;
    }
    if ($number < 0) {
      echo "マイナス値は計算しません。(対象値：{$number})", PHP_EOL;
      continue;
    }
    $total += $number;
  }
  echo "合計：{$total}";

  // 関数

  // return命令は関数を途中で終わらせる
  function add($a, $b) {
    if ($a <= 0) {
      echo '引数は正の数で指定してください';
      return;
    }
    if ($b <= 0) {
      echo '引数は正の数で指定してください';
      return;
    }
    $total2 = $a + $b;
    echo '合計は', $total2, PHP_EOL;
    return $total2;
  }

  $total2 = add(5, -5);
  echo $total2;

  // 関数から別の関数をコールする
  function checkNumber($value) {
    return is_numeric($value) && (int)$value > 0;
  }
  function add2($x, $y) {
    if (!checkNumber($x) || !checkNumber($y)) {
      return 'INVALID';
    }
    $total3 = $x + $y;
    return $total3;
  }

  $result = add2(3, 10);
  echo "計算結果：{$result}";

  $result = add2(5, -4);
  echo "計算結果：{$result}";

  // デフォルト引数
  function calcPriceTax(int $price, float $tax = 0.08): float {
    $result = $price * (1 + $tax);
    return $result;
  }

  $priceWithTax = calcPriceTax(1000);
  echo $priceWithTax;

  // 可変長引数
  // function dosomething(array $datas)
  // function dosomething(string ...$datas)

  function add3(string $header, int ...$numbers2): string {
    $total4 = 0;
    foreach ($numbers2 as $number2) {
      $total4 += $number2;
    }
    return $header . $total4;
  }
  $result3 = add('計算結果：', 3, 2, 9, 1);
  echo $result3;
?>
