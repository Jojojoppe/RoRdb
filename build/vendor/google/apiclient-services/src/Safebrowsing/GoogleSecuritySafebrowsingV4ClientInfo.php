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
namespace RoRdb\Google\Service\Safebrowsing;

class GoogleSecuritySafebrowsingV4ClientInfo extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientVersion;
    /**
     * @param string
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }
    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    /**
     * @param string
     */
    public function setClientVersion($clientVersion)
    {
        $this->clientVersion = $clientVersion;
    }
    /**
     * @return string
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleSecuritySafebrowsingV4ClientInfo::class, 'RoRdb\\Google_Service_Safebrowsing_GoogleSecuritySafebrowsingV4ClientInfo');
