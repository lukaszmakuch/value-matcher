<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

/**
 * Performs strict comparison (===) of two strings.
 * 
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 */
class StrictStringMatcher extends StringMatcherTpl
{
    /**
     * Performs strict comparison (===) of two strings.
     * 
     * @param mixed $someValue
     * 
     * @return boolean true if the values are === equal
     * @throws \InvalidArgumentException when the value is not a string
     */
    protected function matchesImpl($someValue)
    {
        return $someValue === $this->pattern;
    }
}