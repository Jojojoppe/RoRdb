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
namespace RoRdb\Google\Service\CloudAsset;

class IamPolicyAnalysisState extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $cause;
    /**
     * @var string
     */
    public $code;
    /**
     * @param string
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
    }
    /**
     * @return string
     */
    public function getCause()
    {
        return $this->cause;
    }
    /**
     * @param string
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(IamPolicyAnalysisState::class, 'RoRdb\\Google_Service_CloudAsset_IamPolicyAnalysisState');
