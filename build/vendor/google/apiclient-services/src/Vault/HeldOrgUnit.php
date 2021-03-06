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
namespace RoRdb\Google\Service\Vault;

class HeldOrgUnit extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $holdTime;
    /**
     * @var string
     */
    public $orgUnitId;
    /**
     * @param string
     */
    public function setHoldTime($holdTime)
    {
        $this->holdTime = $holdTime;
    }
    /**
     * @return string
     */
    public function getHoldTime()
    {
        return $this->holdTime;
    }
    /**
     * @param string
     */
    public function setOrgUnitId($orgUnitId)
    {
        $this->orgUnitId = $orgUnitId;
    }
    /**
     * @return string
     */
    public function getOrgUnitId()
    {
        return $this->orgUnitId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(HeldOrgUnit::class, 'RoRdb\\Google_Service_Vault_HeldOrgUnit');
