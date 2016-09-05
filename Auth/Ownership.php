<?php

namespace Apollo16\Core\Contracts\Auth;

/**
 * Owner Contracts.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface Ownership
{
    /**
     * Get attribute that indicate ownership for this resource.
     *
     * @return mixed
     */
    public function getOwnerIdentifier();
}