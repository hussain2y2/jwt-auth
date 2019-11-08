<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tymon\JWTAuth\Test\Stubs;

use Cartalyst\Sentinel\Users\UserInterface;

class SentinelStub implements UserInterface
{
    /**
     * @return int
     */
    public function getUserId(): int
    {
        return 123;
    }

    /**
     * @return string
     */
    public function getUserLogin(): string
    {
        return 'foo';
    }

    /**
     * @return string
     */
    public function getUserLoginName(): string
    {
        return 'bar';
    }

    /**
     * @return string
     */
    public function getUserPassword(): string
    {
        return 'baz';
    }
}
