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
namespace RoRdb\Google\Service\CloudMachineLearningEngine;

class GoogleCloudMlV1CompleteTrialRequest extends \RoRdb\Google\Model
{
    protected $finalMeasurementType = GoogleCloudMlV1Measurement::class;
    protected $finalMeasurementDataType = '';
    /**
     * @var string
     */
    public $infeasibleReason;
    /**
     * @var bool
     */
    public $trialInfeasible;
    /**
     * @param GoogleCloudMlV1Measurement
     */
    public function setFinalMeasurement(GoogleCloudMlV1Measurement $finalMeasurement)
    {
        $this->finalMeasurement = $finalMeasurement;
    }
    /**
     * @return GoogleCloudMlV1Measurement
     */
    public function getFinalMeasurement()
    {
        return $this->finalMeasurement;
    }
    /**
     * @param string
     */
    public function setInfeasibleReason($infeasibleReason)
    {
        $this->infeasibleReason = $infeasibleReason;
    }
    /**
     * @return string
     */
    public function getInfeasibleReason()
    {
        return $this->infeasibleReason;
    }
    /**
     * @param bool
     */
    public function setTrialInfeasible($trialInfeasible)
    {
        $this->trialInfeasible = $trialInfeasible;
    }
    /**
     * @return bool
     */
    public function getTrialInfeasible()
    {
        return $this->trialInfeasible;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudMlV1CompleteTrialRequest::class, 'RoRdb\\Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CompleteTrialRequest');
