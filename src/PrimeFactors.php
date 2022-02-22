<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{

    public function __construct()
    {
    }

    public function generatePrimeFactors($num)
    {
        //Record the base
        $pf = array();
        $pn = null;
        for($i=2;$i <= $num;$i++) {
            if($this->isPrime($i, $pn)) {
                $pn[] = $i;
                while($num % $i == 0)
                {
                    $pf[] = $i;
                    $num = $num/$i;
                }
            }
        }
        return $pf;
    }

    //Check if a number is prime
    public function isPrime($num, $pf = null): bool
    {
        if(!is_array($pf))
        {
            for($i=2;$i<intval(sqrt($num));$i++) {
                if($num % $i==0) {
                    return false;
                }
            }
            return true;
        } else {
            $pfCount = count($pf);
            for($i=0;$i<$pfCount;$i++) {
                if($num % $pf[$i] == 0) {
                    return false;
                }
            }
            return true;
        }
    }
}
