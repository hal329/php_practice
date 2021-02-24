<?php

//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function multiple_number($number){
  return $number*2;
}

echo multiple_number(1);


//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a,$b) {
  return $a + $b;
}

echo add(2,3) ;


//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function product($arr){
 $result = $arr[0]; 
  for ($i = 1; $i < count($arr); $i++) {
 $result *= $arr[$i];
}
  return $result;
}
echo product(array(1, 3, 5 ,7, 9));


//【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
 $max_number = $a;
 }
}

return $max_number;
}

echo max_array(array(1, 2, 3,));

//下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
//strip_tags
$str = "<strong>白谷春奏</strong>" ;

echo strip_tags($str);

//array_push
$arr = array("red","blue","violet");
array_push($arr,"yellow");

print_r ($arr);

//array_merge
$array_a = array("fruits" => "banana","apple" => "ringo",4,5);
$array_b = array("number" => 1,2,3,);
$result = array_merge($array_a,$array_b);

print_r ($result);

//time, mktime
echo time();
//1970/1/1から1614172972秒経過している（2021/2/24　22:23実行時点）

$time = mktime(0, 0, 0, 29, 2, 2017);
echo $time;
//2017年の誕生日までの経過時間が出せる

//date
echo date('l jS \of F Y h:i:s A');
//今日の年月日時間などが出せる