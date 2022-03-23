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
namespace RoRdb\Google\Service\ChromeManagement;

class GoogleChromeManagementV1AndroidAppInfo extends \RoRdb\Google\Collection
{
    protected $collection_key = 'permissions';
    protected $permissionsType = GoogleChromeManagementV1AndroidAppPermission::class;
    protected $permissionsDataType = 'array';
    /**
     * @param GoogleChromeManagementV1AndroidAppPermission[]
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }
    /**
     * @return GoogleChromeManagementV1AndroidAppPermission[]
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleChromeManagementV1AndroidAppInfo::class, 'RoRdb\\Google_Service_ChromeManagement_GoogleChromeManagementV1AndroidAppInfo');
