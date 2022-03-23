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

class LicenseResourceCommitment extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $amount;
    /**
     * @var string
     */
    public $coresPerLicense;
    /**
     * @var string
     */
    public $license;
    /**
     * @param string
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @param string
     */
    public function setCoresPerLicense($coresPerLicense)
    {
        $this->coresPerLicense = $coresPerLicense;
    }
    /**
     * @return string
     */
    public function getCoresPerLicense()
    {
        return $this->coresPerLicense;
    }
    /**
     * @param string
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }
    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LicenseResourceCommitment::class, 'RoRdb\\Google_Service_Compute_LicenseResourceCommitment');
