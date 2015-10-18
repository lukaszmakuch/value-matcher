<?php

/**
 * This file is part of the ValueMatcher library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch\ValueMatcher;

/**
 * Checks whether some value matches.
 */
interface ValueMatcher
{
    /**
     * Checks whether some value matches.
     *
     * @param mixed $someValue
     *
     * @return boolean true if the values matches, false otherwise.
     * @throws \InvalidArgumentException when it's not possible to check this value.
     */
    public function matches($someValue);
}
