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
namespace RoRdb\Google\Service\SmartDeviceManagement;

class GoogleHomeEnterpriseSdmV1ParentRelation extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $parent;
    /**
     * @param string
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    /**
     * @param string
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleHomeEnterpriseSdmV1ParentRelation::class, 'RoRdb\\Google_Service_SmartDeviceManagement_GoogleHomeEnterpriseSdmV1ParentRelation');
