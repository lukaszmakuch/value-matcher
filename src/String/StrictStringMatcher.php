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
class StrictStringMatcher implements \lukaszmakuch\ValueMatcher\ValueMatcher
{
    /**
     * @var String used later to match values
     */
    protected $pattern;
    
    /**
     * Provides pattern used later to match other strings.
     * 
     * @param String $pattern
     * 
     * @throws \InvalidArgumentException if the patterns is not a string.
     */
    public function __construct($pattern)
    {
        $this->throwExceptionIfNotString($pattern);
        $this->pattern = $pattern;
    }
    
    /**
     * Checks whether this value is equal the pattern of this matcher.
     * 
     * @param String $someValue value to compare
     * 
     * @return boolean true if equal
     * @throws \InvalidArgumentException if the value is not a string.
     */
    public function matches($someValue)
    {
        $this->throwExceptionIfNotString($someValue);
        return ($this->pattern === $someValue);
    }
    
    protected function throwExceptionIfNotString($value)
    {
        if (!is_string($value)) {
            throw new \InvalidArgumentException("Value must be a string!");
        }
    }
}