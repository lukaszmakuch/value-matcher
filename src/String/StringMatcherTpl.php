<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

use InvalidArgumentException;
use lukaszmakuch\ValueMatcher\Exception\ImpossibleToMatchValueException;
use lukaszmakuch\ValueMatcher\ValueMatcherTpl;

/**
 * Abstract template of a string matcher.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 */
abstract class StringMatcherTpl extends ValueMatcherTpl implements StringMatcher
{
    /**
     * @throws ImpossibleToMatchValueException if input is not a string
     */
    protected function throwExceptionIfInvalidInput($input)
    {
        if (!is_string($input)) {
            throw new ImpossibleToMatchValueException("Input must be a string");
        }
    }
}
