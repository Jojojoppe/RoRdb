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
namespace RoRdb\Google\Service\TrafficDirectorService;

class Locality extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $subZone;
    /**
     * @var string
     */
    public $zone;
    /**
     * @param string
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * @param string
     */
    public function setSubZone($subZone)
    {
        $this->subZone = $subZone;
    }
    /**
     * @return string
     */
    public function getSubZone()
    {
        return $this->subZone;
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
\class_alias(Locality::class, 'RoRdb\\Google_Service_TrafficDirectorService_Locality');
