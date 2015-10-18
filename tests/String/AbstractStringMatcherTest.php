<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

abstract class AbstractStringMatcherTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var StrictStringMatcher
     */
    protected $m;
    
    public function testExceptionIfNotString()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        $this->m->matches(123);
    }
}
