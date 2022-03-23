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
namespace RoRdb\Google\Service\VMMigrationService;

class AppliedLicense extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $osLicense;
    /**
     * @var string
     */
    public $type;
    /**
     * @param string
     */
    public function setOsLicense($osLicense)
    {
        $this->osLicense = $osLicense;
    }
    /**
     * @return string
     */
    public function getOsLicense()
    {
        return $this->osLicense;
    }
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AppliedLicense::class, 'RoRdb\\Google_Service_VMMigrationService_AppliedLicense');