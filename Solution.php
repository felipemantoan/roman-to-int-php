<?php

class Solution {

    const SYMBOLS = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    /**
     * @param String $s
     * @return int
     */
    function romanToInt($s) {
        
        $letter = $s[0];

        if (strlen($s) > 1) {
            $s = substr($s, 1);
            $current = self::SYMBOLS[$letter];
            
            if ($current >= self::SYMBOLS[$s[0]]) {
                return $current + $this->romanToInt($s);
            }

            return ($current * -1) + $this->romanToInt($s);

        }
        
        return self::SYMBOLS[$letter];
    }
}

$solution = new Solution();
echo $solution->romanToInt('III') . "\n";
echo $solution->romanToInt('LVIII') . "\n";
echo $solution->romanToInt("MCMXCIV") . "\n";
