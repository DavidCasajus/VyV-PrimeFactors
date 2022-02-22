<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;
use Deg540\PHPTestingBoilerplate\PrimeFactors;

class PrimeFactorsTest extends TestCase
{

    protected function setUp() :void
    {
        parent::setUp();
        $this->primeFactor = new PrimeFactors();
    }

    /**
     * @test
     */
    public function it_calculates_that_1_does_not_have_prime_factors()
    {
        $result = $this->primeFactor->generatePrimeFactors(1);
        $this->assertEquals([], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_2()
    {
        $result = $this->primeFactor->generatePrimeFactors(2);
        $this->assertEquals([2], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_3()
    {
        $result = $this->primeFactor->generatePrimeFactors(3);
        $this->assertEquals([3], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_4()
    {
        $result =  $this->primeFactor->generatePrimeFactors(4);
        $this->assertEquals([2,2], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_5()
    {
        $result = $this->primeFactor->generatePrimeFactors(5);
        $this->assertEquals([5], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_6()
    {
        $result =  $this->primeFactor->generatePrimeFactors(6);
        $this->assertEquals([2,3], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_8()
    {
        $result = $this->primeFactor->generatePrimeFactors(8);
        $this->assertEquals([2,2,2], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_9()
    {
        $result =  $this->primeFactor->generatePrimeFactors(9);
        $this->assertEquals([3,3], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_100()
    {
        $result = $this->primeFactor->generatePrimeFactors(100);
        $this->assertEquals([2,2,5,5], $result);
    }

    /**
     * @test
     */
    public function it_computes_prime_factors_of_300()
    {
        $result = $this->primeFactor->generatePrimeFactors(300);
        $this->assertEquals([2,2,3,5,5], $result);
    }

    /**
     * @test
     */
    public function is_1_prime_number()
    {
        $result = $this->primeFactor->isPrime(1,null);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function is_2_prime_number()
    {
        $result = $this->primeFactor->isPrime(2, null);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function is_3_prime_number()
    {
        $result = $this->primeFactor->isPrime(3,null);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function is_4_prime_number()
    {
        $result = $this->primeFactor->isPrime(4,[2]);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function is_7_prime_number()
    {
        $result = $this->primeFactor->isPrime(7,null);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function is_8_prime_number()
    {
        $result = $this->primeFactor->isPrime(8,[2,2]);
        $this->assertFalse($result);
    }
}
