<?php

namespace Apollo16\Core\Contracts\Auth\Permission;

/**
 * Permission Contract.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface Permissible
{
    /**
     * Get list of permissions for this role.
     *
     * @return array
     */
    public function permissions();
}