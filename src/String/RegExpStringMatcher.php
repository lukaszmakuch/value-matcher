<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

/**
 * Checks a string against a regular expression.
 * 
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 */
class RegExpStringMatcher extends StringMatcherTpl
{
    /**
     * Sets the regular expression pattern used to compare values.
     * 
     * @param String $pattern regular expression used later as the first param
     * of the preg_match function.
     * 
     * @throws \InvalidArgumentException if the patterns is not a string.
     */
    public function __construct($pattern)
    {
        parent::__construct($pattern);
    }
    
    /**
     * Checks a string against a regular expression.
     * 
     * @param mixed $someValue
     * 
     * @return boolean true if the given value matches.
     * @throws \InvalidArgumentException when the value is not a string
     */
    protected function matchesImpl($someValue)
    {
        return (1 === preg_match($this->pattern, $someValue));
    }
}
