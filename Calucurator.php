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

    private function calAvgPrice()
    {
        list($total,$count) = $this->calTotalPrice();

        echo "生成した自動車の台数は".$count."台です。<br>";

        $avg = round($total / $count,1);
        return array($total,$avg);
    }

    public function outputResult()
    {
        list($total,$avg) = $this->calAvgPrice();
        $total = number_format($total);
        $avg = number_format($avg,1);

        echo "生成した自動車の合計金額は".$total."万円です。<br>";
        echo "生成した自動車の平均金額は".$avg."万円です。<br>";
        ;
    }







    
}



?>