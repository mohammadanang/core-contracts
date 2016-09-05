<?php

namespace Apollo16\Core\Contracts\Auth;

use Apollo16\Core\Contracts\Auth\Role\AuthorizableRole;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Guard;

/**
 * Shield Contracts.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 */

interface Shield extends Guard
{
    /**
     * Attach role to list of roles.
     *
     * @param \Apollo16\Core\Contracts\Auth\Role\AuthorizableRole $role
     */
    public function attachRole(AuthorizableRole $role);

    /**
     * Resolve user.
     *
     * @param \Apollo16\Core\Contracts\Auth\Role\AuthorizableRole $role
     */
    public function resolveRole(AuthorizableRole $role);

    /**
     * Detach role from the list of role.
     *
     * @param $identifier
     */
    public function detachRole($identifier);

    /**
     * Add permission to the list of permissions.
     *
     * @param $permission
     * @param $role
     */
    public function setPermission($permission, $role = null);

    /**
     * Remove permissions from the list of permissions.
     *
     * @param $permission
     * @param $role
     */
    public function removePermission($permission, $role = null);

    /**
     * Determine if a user has a specific roles.
     *
     * @param $identifier
     * @return bool
     */
    public function hasRole($identifier);

    /**
     * Get list of roles for this user.
     *
     * @return array
     */
    public function roles();

    /**
     * Determine if a user has access to a certain permission.
     *
     * @param $permission
     * @return bool
     */
    public function can($permission);

    /**
     * Determine if a user don't have any access to a certain permission.
     *
     * @param $permission
     * @return bool
     */
    public function cannot($permission);

    /**
     * Determine if a user is super user.
     *
     * @return bool
     */
    public function isSuperUser();

    /**
     * Get all available permissions for this user.
     *
     * @return array
     */
    public function permissions();

    /**
     * Determine if this user is the ownership of certain resource.
     *
     * @param \Apollo16\Core\Contracts\Auth\Ownership $resource
     * @return bool
     */
    public function isOwner(Ownership $resource);

    /**
     * Set roles and permissions.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     */
    public function setRolesAndPermissions(Authenticatable $user);

    /**
     * Reset roles and permissions.
     */
    public function resetRolesAndPermissions();
}