<?php

namespace Apollo16\Core\Contracts\Auth\Role;

/**
 * Authorizable Contract.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface Authorizable
{
    /**
     * Get Roles.
     *
     * @return array
     */
    public function getRoles();
}