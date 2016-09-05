<?php

namespace Apollo16\Core\Contracts\Route;

use Illuminate\Contracts\Routing\Registrar;

/**
 * Binder contract interface.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface Binder
{
    /**
     * Register route binding.
     *
     * @param \Illuminate\Contracts\Routing\Registrar $route
     * @return mixed
     */
    public function bind(Registrar $route);
}