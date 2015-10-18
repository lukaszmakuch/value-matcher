<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher;

/**
 * Abstract template of a matcher.
 */
abstract class ValueMatcherTpl implements ValueMatcher
{
    /**
     * @var mixed some pattern used later to compare values
     */
    protected $pattern;
    
    /**
     * Sets the pattern used to compare values.
     *
     * @param mixed $pattern
     *
     * @throws \InvalidArgumentException if the patterns is not a string.
     */
    public function __construct($pattern)
    {
        $this->throwExceptionIfInvalidInput($pattern);
        $this->pattern = $pattern;
    }

    public function serialize()
    {
        return $this->pattern;
    }

    public function unserialize($serialized)
    {
        $this->pattern = $serialized;
    }

    /**
     * Performs type checking.
     *
     * @param mixed $someValue
     *
     * @return boolean true if the values matches, false otherwise.
     * @throws \InvalidArgumentException when it's not possible to check this value.
     */
    public function matches($someValue)
    {
        $this->throwExceptionIfInvalidInput($someValue);
        return $this->matchesImpl($someValue);
    }

    /**
     * @throws \InvalidArgumentException if invalid input
     */
    abstract protected function throwExceptionIfInvalidInput($input);
    
    /**
     * Actual matching strategy.
     *
     * @param mixed $someValue
     *
     * @return boolean true if the values matches, false otherwise.
     */
    abstract protected function matchesImpl($someValue);
}
