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
namespace RoRdb\Google\Service\CloudRun;

class GoogleCloudRunOpV2SecretVolumeSource extends \RoRdb\Google\Collection
{
    protected $collection_key = 'items';
    /**
     * @var int
     */
    public $defaultMode;
    protected $itemsType = GoogleCloudRunOpV2VersionToPath::class;
    protected $itemsDataType = 'array';
    /**
     * @var string
     */
    public $secret;
    /**
     * @param int
     */
    public function setDefaultMode($defaultMode)
    {
        $this->defaultMode = $defaultMode;
    }
    /**
     * @return int
     */
    public function getDefaultMode()
    {
        return $this->defaultMode;
    }
    /**
     * @param GoogleCloudRunOpV2VersionToPath[]
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
    /**
     * @return GoogleCloudRunOpV2VersionToPath[]
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @param string
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }
    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudRunOpV2SecretVolumeSource::class, 'RoRdb\\Google_Service_CloudRun_GoogleCloudRunOpV2SecretVolumeSource');
