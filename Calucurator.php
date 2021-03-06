<?php
require_once("./CarGenerator.php");

class Calucurator
{
    private function calTotalPrice()
    {
        $min = 1;
        $max = 10;
        $generator = new CarGenerator();

        //Hondaの合計
        $h_array = $generator->generateHonda($min,$max);
        $h_sum = array_sum($h_array);
        echo "Hondaの合計金額は".number_format($h_sum)."万円です。<br>";
        echo "<br>";

        //Nissanの合計
        $n_array = $generator->generateNissan($min,$max);
        $n_sum = array_sum($n_array);
        echo "Nissanの合計金額は".number_format($n_sum)."万円です。<br>";
        echo "<br>";

        //Ferrariの合計
        $f_array = $generator->generateFerrari($min,$max);
        $f_sum = array_sum($f_array);
        echo "Ferrariの合計金額は".number_format($f_sum)."万円です。<br>";
        echo "<br>";

        //全台数の合計
        $total = $h_sum + $n_sum  + $f_sum ;

        $count = count($h_array) + count($n_array) + count($f_array);        

        return array($total,$count);
        
    }

    //平均価格を計算
    private function calAvgPrice()
    {
        list($total,$count) = $this->calTotalPrice();

        echo "生成した自動車の台数は".$count."台です。<br>";

        $avg = round($total / $count,1);
        return array($total,$avg);
    }

    //結果を出力
    public function outputResult()
    {
        list($total,$avg) = $this->calAvgPrice();
        $total = number_format($total);
        $avg = number_format($avg,1);

        echo "生成した自動車の合計金額は".$total."万円です。<br>";
        echo "生成した自動車の平均金額は".$avg."万円です。<br>";
        ;
    }

    //レースの距離を決める
    public function defineDistance(){
        //100,000メートルから500,000メートルの間でランダム
        $disstance = mt_rand(1,5)*100000;
        echo "レースの距離は".number_format($disstance)."mです。<br>";
        return $disstance;
    }

    //完走時間を秒から変換する
    public function convertTime($time){
        $hours = floor( $time / 3600 );
        $minutes = floor( ( $time / 60 ) % 60 );
        $seconds = $time % 60;

        return $hours."時間".$minutes."分".$seconds."秒";
    }






    
}



?>