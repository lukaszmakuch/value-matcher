<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

class StrictStringMatcherTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StrictStringMatcher
     */
    protected $m;
    
    public function setUp()
    {
        $this->m = new StrictStringMatcher("Abc");
    }
    
    public function testMatchingEqualStrings()
    {
        $this->assertTrue($this->m->matches("Abc"));
    }
    
    public function testMatchingSimilarStrings()
    {
        $this->assertFalse($this->m->matches("abc"));
    }
    
    public function testExceptionIfNotString()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        $this->m->matches(123);
    }
}