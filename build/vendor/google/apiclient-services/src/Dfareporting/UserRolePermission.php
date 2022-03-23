<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace RoRdb\Google\Service\Dfareporting;

class UserRolePermission extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $availability;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $permissionGroupId;
    /**
     * @param string
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }
    /**
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }
    /**
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string
     */
    public function setPermissionGroupId($permissionGroupId)
    {
        $this->permissionGroupId = $permissionGroupId;
    }
    /**
     * @return string
     */
    public function getPermissionGroupId()
    {
        return $this->permissionGroupId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(UserRolePermission::class, 'RoRdb\\Google_Service_Dfareporting_UserRolePermission');