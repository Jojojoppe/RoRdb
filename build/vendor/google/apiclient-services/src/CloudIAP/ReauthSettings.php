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
namespace RoRdb\Google\Service\CloudIAP;

class ReauthSettings extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $maxAge;
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @param string
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
    }
    /**
     * @return string
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }
    /**
     * @param string
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }
    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * @param string
     */
    public function setPolicyType($policyType)
    {
        $this->policyType = $policyType;
    }
    /**
     * @return string
     */
    public function getPolicyType()
    {
        return $this->policyType;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ReauthSettings::class, 'RoRdb\\Google_Service_CloudIAP_ReauthSettings');