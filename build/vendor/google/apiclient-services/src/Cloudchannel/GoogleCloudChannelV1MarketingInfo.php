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
namespace RoRdb\Google\Service\Cloudchannel;

class GoogleCloudChannelV1MarketingInfo extends \RoRdb\Google\Model
{
    protected $defaultLogoType = GoogleCloudChannelV1Media::class;
    protected $defaultLogoDataType = '';
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @param GoogleCloudChannelV1Media
     */
    public function setDefaultLogo(GoogleCloudChannelV1Media $defaultLogo)
    {
        $this->defaultLogo = $defaultLogo;
    }
    /**
     * @return GoogleCloudChannelV1Media
     */
    public function getDefaultLogo()
    {
        return $this->defaultLogo;
    }
    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudChannelV1MarketingInfo::class, 'RoRdb\\Google_Service_Cloudchannel_GoogleCloudChannelV1MarketingInfo');
