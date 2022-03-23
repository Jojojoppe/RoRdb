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

class AutoscalingPolicyScaleInControl extends \RoRdb\Google\Model
{
    protected $maxScaledInReplicasType = FixedOrPercent::class;
    protected $maxScaledInReplicasDataType = '';
    /**
     * @var int
     */
    public $timeWindowSec;
    /**
     * @param FixedOrPercent
     */
    public function setMaxScaledInReplicas(FixedOrPercent $maxScaledInReplicas)
    {
        $this->maxScaledInReplicas = $maxScaledInReplicas;
    }
    /**
     * @return FixedOrPercent
     */
    public function getMaxScaledInReplicas()
    {
        return $this->maxScaledInReplicas;
    }
    /**
     * @param int
     */
    public function setTimeWindowSec($timeWindowSec)
    {
        $this->timeWindowSec = $timeWindowSec;
    }
    /**
     * @return int
     */
    public function getTimeWindowSec()
    {
        return $this->timeWindowSec;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AutoscalingPolicyScaleInControl::class, 'RoRdb\\Google_Service_Compute_AutoscalingPolicyScaleInControl');