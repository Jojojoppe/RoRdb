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
namespace RoRdb\Google\Service\ServiceControl;

class Peer extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $principal;
    /**
     * @var string
     */
    public $regionCode;
    /**
     * @param string
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }
    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * @param string[]
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string
     */
    public function setPort($port)
    {
        $this->port = $port;
    }
    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * @param string
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;
    }
    /**
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }
    /**
     * @param string
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
    }
    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Peer::class, 'RoRdb\\Google_Service_ServiceControl_Peer');