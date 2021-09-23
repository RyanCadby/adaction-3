<?php

class FizzBuzz {
    
    public function calculateFizzBuzz($start = 1, $limit = 20) {
        if( empty($limit) || !is_int($limit) || empty($start) || !is_int($start) || $start > $limit ){
            return false;
        }
        $fizzBuzzStr = array();
        $fizzBuzzCount = array(
            'fizz' => 0,
            'buzz' => 0,
            'fizzbuzz' => 0,
            'lucky' => 0,
            'integer' => 0
        );

        // loop through contiguous range of numbers
        for( $i = $start; $i <= $limit; $i++ ){
            // get boolean values for num divisibility
            $divideThree = ( 0 === $i % 3 ); 
            $divideFive = ( 0 === $i % 5 ); 

            // check for digit three in number
            if( preg_match('/3+/', $i ) ){
                $fizzBuzzStr[] = 'lucky';
                $fizzBuzzCount['lucky']++;
                continue;
            }

            // print number if not evenly divisible
            if( !$divideThree && !$divideFive ){
                $fizzBuzzStr[] = $i;
                $fizzBuzzCount['integer']++;
                continue;
            }

            // check if divisible and add text
            if( $divideThree && $divideFive ){
                $fizzBuzzStr[] = 'fizzbuzz';
                $fizzBuzzCount['fizzbuzz']++;
            } elseif( $divideThree ){
                $fizzBuzzStr[] = 'fizz';
                $fizzBuzzCount['fizz']++;
            } elseif( $divideFive ){
                $fizzBuzzStr[] = 'buzz';
                $fizzBuzzCount['buzz']++;
            }
        }
        return array($fizzBuzzStr, $fizzBuzzCount);
    }

}