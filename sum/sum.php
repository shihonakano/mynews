<?php
/* 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください */
function sum1( $n ){
    $result = $n*2;
    return $result;
}
echo sum1(1);
?>



<?php
/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください*/
    function sum2( $a,  $b) {
    $result = $a + $b;
    return $result;
 }
 echo sum2( 3, 4); 
 ?>
 
 
 
<?php
/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function sum3($arr){
    $result = array_product($arr);
    return $result;
}
$arr = [1, 3, 5 ,7, 9];
$result = sum3($arr);
echo $result;
?>

<?php
//【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
 //どうしたらいいかわからない・・・・
      if ($max_number <= $a  ) {
          $max_number = $a;
      }
    }
    return $max_number;
}
 $arr = [1, 3, 2 ,7, 9];
 //echo $max_number;
 $max_number = max_array($arr);
 echo $max_number;
?>




