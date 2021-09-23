<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {

    // test int not evenly divisible
    public function testInt() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 1;
        $inputLimit = 1;
        $expectedResults = array( 1 );
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test lucky
    public function testLimitThree() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 3;
        $inputLimit = 3;
        $expectedResults = array(
            0 => array(
                'lucky'
            ),
            1 => array(
                'fizz' => 0,
                'buzz' => 0,
                'fizzbuzz' => 0,
                'lucky' => 1,
                'integer' => 0
            )
        );
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test buzz
    public function testLimitFive() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 5;
        $inputLimit = 5;
        $expectedResults = array(
            0 => array(
                'buzz'
            ),
            1 => array(
                'fizz' => 0,
                'buzz' => 1,
                'fizzbuzz' => 0,
                'lucky' => 0,
                'integer' => 0
            )
        );
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test fizz
    public function testLimitSix() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 6;
        $inputLimit = 6;
        $expectedResults = array(
            0 => array(
                'fizz'
            ),
            1 => array(
                'fizz' => 1,
                'buzz' => 0,
                'fizzbuzz' => 0,
                'lucky' => 0,
                'integer' => 0
            )
        );
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test fizzbuzz
    public function testLimitFifteen() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 15;
        $inputLimit = 15;
        $expectedResults = array(
            0 => array(
                'fizzbuzz'
            ),
            1 => array(
                'fizz' => 0,
                'buzz' => 0,
                'fizzbuzz' => 1,
                'lucky' => 0,
                'integer' => 0
            )
        );
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input - string start
    public function testStringInputStart() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 'abc';
        $inputLimit = 3;
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input - string limit
    public function testStringInputLimit() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 3;
        $inputLimit = 'abc';
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input start - null
    public function testNullInputStart() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = null;
        $inputLimit = 15;
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input limit - null
    public function testNullInputLimit() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 1;
        $inputLimit = null;
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input start - 0
    public function testZeroInputStart() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 0;
        $inputLimit = 15;
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input limit - null
    public function testZeroInputLimit() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 1;
        $inputLimit = 0;
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }

    // test incorrect input - start greater than limit
    public function testNegativeInput() {
        $fizzBuzz = new FizzBuzz();
        $inputStart = 30;
        $inputLimit = 20;
        $expectedResults = false;
        $testResults = $fizzBuzz->calculateFizzBuzz($inputStart, $inputLimit);
        $this->assertEquals($expectedResults, $testResults);
    }
}
