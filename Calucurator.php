<?php
require_once("./CarGenerator.php");

class Calucurator
{
    private function calTotalPrice()
    {
        $min = 1;
        $max = 10;
        $generator = new CarGenerator();

        $h_array = $generator->generateHonda($min,$max);
        $n_array = $generator->generateNissan($min,$max);
        $f_array = $generator->generateFerrari($min,$max);

        $total = array_sum($h_array) + array_sum($n_array) + array_sum($f_array);

        $count = count($h_array) + count($n_array) + count($f_array);        

        return array($total,$count);
        
    }

    private function calAvgPrice()
    {
        list($total,$count) = $this->calTotalPrice();

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