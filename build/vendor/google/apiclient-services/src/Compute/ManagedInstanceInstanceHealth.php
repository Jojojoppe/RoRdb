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
namespace RoRdb\Google\Service\Compute;

class ManagedInstanceInstanceHealth extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $detailedHealthState;
    /**
     * @var string
     */
    public $healthCheck;
    /**
     * @param string
     */
    public function setDetailedHealthState($detailedHealthState)
    {
        $this->detailedHealthState = $detailedHealthState;
    }
    /**
     * @return string
     */
    public function getDetailedHealthState()
    {
        return $this->detailedHealthState;
    }
    /**
     * @param string
     */
    public function setHealthCheck($healthCheck)
    {
        $this->healthCheck = $healthCheck;
    }
    /**
     * @return string
     */
    public function getHealthCheck()
    {
        return $this->healthCheck;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ManagedInstanceInstanceHealth::class, 'RoRdb\\Google_Service_Compute_ManagedInstanceInstanceHealth');
