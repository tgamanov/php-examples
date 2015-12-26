<?php
//В класс Fraction из предыдущих занятий (урок Статические Методы) добавить использование исключений при попытке деления на 0
class Fraction
{
    public $a;
    public $b;
    public function check($vv=1)// check if denominator equal zero, devide on zero is forbidden
    {
        try {//what condition are we looking for
            if ($vv==0) {
                throw new Exception('Devide on zero is forbidden, please change denominator. It is must not be equal
                zero.');
            }
            } catch(Exception $e) {//what should be if we have described condition
            echo "During implementation of the script you have next error: "."<br>".$e->getMessage()."<br>";die;
            }

    }

    public function __construct($a, $b)
    {
        $this->check($b);//checking if denominator is not zero
        $this->a = (float)$a;
        $this->b = (float)$b;
        $res = $this->a / $this->b;
        echo $a."/".$b." = " . number_format($res, 2) . '<br/>';
    }
    //the sum of two fractions
    public static function sumfract ($c, $d, $i, $f)
    {
       Fraction::check($d);//checking if denominator is not zero
       Fraction::check($f);//checking if denominator is not zero
        $sumfr = $c / $d + $i / $f;
        echo $c."/".$d." + ". $i."/".$f." = ". number_format($sumfr,2,',', '').'<br/>';
    }
    //Subtract two fractions
    public static function subfract ($c, $d, $i, $f)
    {
        Fraction::check($d);//checking if denominator is not zero
        Fraction::check($f);//checking if denominator is not zero
        $subfr = $c / $d - $i / $f;
        echo $c."/".$d." - ". $i."/".$f." = ". number_format($subfr,2,',', '').'<br/>';}
    //divide two fractions
    public static function devfract ($c, $d, $i, $f)
    {
        Fraction::check($d);//checking if denominator is not zero
        Fraction::check($f);//checking if denominator is not zero
        $df = ($c / $d) / ($i / $f);
        echo $c."/".$d." / ". $i."/".$f." = ". number_format($df,2,',', '').'<br/>';
    }
    //multiplication of two fractions
    public static function multfract ($c, $d, $i, $f)
    {
        Fraction::check($d);//checking if denominator is not zero
        Fraction::check($f);//checking if denominator is not zero
        $mf = ($c / $d) * ($i / $f);
        echo $c."/".$d." * ". $i."/".$f." = ". number_format($mf,2,',', '').'<br/>';
    }
}

$ttt = new Fraction(55, 1);
Fraction::sumfract(23456, 1, 56788, 167);
Fraction::subfract(1,2,4,5);
Fraction::devfract(1,2,5,2);
Fraction::multfract(30,0,3,2);// error!