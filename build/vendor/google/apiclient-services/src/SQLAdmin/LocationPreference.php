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
namespace RoRdb\Google\Service\SQLAdmin;

class LocationPreference extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $followGaeApplication;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $secondaryZone;
    /**
     * @var string
     */
    public $zone;
    /**
     * @param string
     */
    public function setFollowGaeApplication($followGaeApplication)
    {
        $this->followGaeApplication = $followGaeApplication;
    }
    /**
     * @return string
     */
    public function getFollowGaeApplication()
    {
        return $this->followGaeApplication;
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
    public function setSecondaryZone($secondaryZone)
    {
        $this->secondaryZone = $secondaryZone;
    }
    /**
     * @return string
     */
    public function getSecondaryZone()
    {
        return $this->secondaryZone;
    }
    /**
     * @param string
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LocationPreference::class, 'RoRdb\\Google_Service_SQLAdmin_LocationPreference');
