<?php

namespace Apollo16\Core\Contracts\Auth\Role;

use Apollo16\Core\Contracts\Auth\Permission\Permissible;

/**
 * Authorizable Role Interface.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface AuthorizableRole extends Permissible
{
    /**
     * Role identifier.
     *
     * @return string
     */
    public function identifier();
}