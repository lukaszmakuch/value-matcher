<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

class StrictStringMatcherTest extends \lukaszmakuch\ValueMatcher\ValueMatcherTplTest
{
    /**
     * @var StrictStringMatcher
     */
    protected $m;
    
    public function setUp()
    {
        $this->m = new StrictStringMatcher("Abc");
    }
    
    public function testCorrentMatching()
    {
        $this->assertTrue($this->m->matches("Abc"));
    }
    
    public function testMatchingSimilarStrings()
    {
        $this->assertFalse($this->m->matches("abc"));
    }
}
