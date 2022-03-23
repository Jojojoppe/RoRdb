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
namespace RoRdb\Google\Service\Networkconnectivity;

class LinkedVpnTunnels extends \RoRdb\Google\Collection
{
    protected $collection_key = 'uris';
    /**
     * @var bool
     */
    public $siteToSiteDataTransfer;
    /**
     * @var string[]
     */
    public $uris;
    /**
     * @param bool
     */
    public function setSiteToSiteDataTransfer($siteToSiteDataTransfer)
    {
        $this->siteToSiteDataTransfer = $siteToSiteDataTransfer;
    }
    /**
     * @return bool
     */
    public function getSiteToSiteDataTransfer()
    {
        return $this->siteToSiteDataTransfer;
    }
    /**
     * @param string[]
     */
    public function setUris($uris)
    {
        $this->uris = $uris;
    }
    /**
     * @return string[]
     */
    public function getUris()
    {
        return $this->uris;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LinkedVpnTunnels::class, 'RoRdb\\Google_Service_Networkconnectivity_LinkedVpnTunnels');
