<?php

namespace Apollo16\Core\Contracts\Payload;

/**
 * Payload broker interface.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface Broker
{
    /**
     * Set payload.
     *
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value);

    /**
     * Get payload.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Check the payload against its counterpart.
     *
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    public function check($key, $value);

    /**
     * Create encrypted value for payload.
     *
     * @return string
     */
    public function payload();
}