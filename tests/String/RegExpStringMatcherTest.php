<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

class RegExpStringMatcherTest extends AbstractStringMatcherTest
{
    /**
     * @var StrictStringMatcher
     */
    protected $m;
    
    public function setUp()
    {
        $this->m = new RegExpStringMatcher("@^[a-z]x$@");
    }
    
    public function testMatchingProperString()
    {
        $this->assertTrue($this->m->matches("cx"));
    }
    
    public function testMatchingInvalidString()
    {
        $this->assertFalse($this->m->matches("xc"));
    }
}
