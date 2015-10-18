<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher;

abstract class ValueMatcherTplTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ValueMatcher
     */
    protected $m;

    public function testSerialization()
    {
        $this->m = unserialize(serialize($this->m));
        $this->testCorrentMatching();
    }
}
