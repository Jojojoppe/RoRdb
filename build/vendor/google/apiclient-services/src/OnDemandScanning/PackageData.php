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
namespace RoRdb\Google\Service\OnDemandScanning;

class PackageData extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $cpeUri;
    /**
     * @var string
     */
    public $os;
    /**
     * @var string
     */
    public $osVersion;
    /**
     * @var string
     */
    public $package;
    /**
     * @var string
     */
    public $packageType;
    /**
     * @var string
     */
    public $unused;
    /**
     * @var string
     */
    public $version;
    /**
     * @param string
     */
    public function setCpeUri($cpeUri)
    {
        $this->cpeUri = $cpeUri;
    }
    /**
     * @return string
     */
    public function getCpeUri()
    {
        return $this->cpeUri;
    }
    /**
     * @param string
     */
    public function setOs($os)
    {
        $this->os = $os;
    }
    /**
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * @param string
     */
    public function setOsVersion($osVersion)
    {
        $this->osVersion = $osVersion;
    }
    /**
     * @return string
     */
    public function getOsVersion()
    {
        return $this->osVersion;
    }
    /**
     * @param string
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }
    /**
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }
    /**
     * @param string
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
    }
    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }
    /**
     * @param string
     */
    public function setUnused($unused)
    {
        $this->unused = $unused;
    }
    /**
     * @return string
     */
    public function getUnused()
    {
        return $this->unused;
    }
    /**
     * @param string
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(PackageData::class, 'RoRdb\\Google_Service_OnDemandScanning_PackageData');
