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
namespace RoRdb\Google\Service\CloudIot;

class SendCommandToDeviceRequest extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $binaryData;
    /**
     * @var string
     */
    public $subfolder;
    /**
     * @param string
     */
    public function setBinaryData($binaryData)
    {
        $this->binaryData = $binaryData;
    }
    /**
     * @return string
     */
    public function getBinaryData()
    {
        return $this->binaryData;
    }
    /**
     * @param string
     */
    public function setSubfolder($subfolder)
    {
        $this->subfolder = $subfolder;
    }
    /**
     * @return string
     */
    public function getSubfolder()
    {
        return $this->subfolder;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SendCommandToDeviceRequest::class, 'RoRdb\\Google_Service_CloudIot_SendCommandToDeviceRequest');
