<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules;

class AlwaysInvalid extends AbstractRule
{
    public function __invoke($input)
    {
        return $this->validate($input);
    }

    public function validate($input)
    {
        return false;
    }
}
