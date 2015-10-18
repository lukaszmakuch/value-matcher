<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher\String;

/**
 * Checks whether two strings somehow match.
 * 
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 */
interface StringMatcher
{
    /**
     * Checks whether two strings somehow match.
     *
     * @param String $someValue
     *
     * @return boolean true if the value matches, false otherwise.
     * @throws \InvalidArgumentException when it's not possible to check this value.
     */
    public function matches($someValue);
}
