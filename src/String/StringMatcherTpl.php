<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

/**
 * Abstract template of a string matcher.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 */
abstract class StringMatcherTpl extends \lukaszmakuch\ValueMatcher\ValueMatcherTpl implements StringMatcher
{
    /**
     * @throws \InvalidArgumentException if input is not a string
     */
    protected function throwExceptionIfInvalidInput($input)
    {
        if (!is_string($input)) {
            throw new \InvalidArgumentException("Input must be a string");
        }
    }
}
