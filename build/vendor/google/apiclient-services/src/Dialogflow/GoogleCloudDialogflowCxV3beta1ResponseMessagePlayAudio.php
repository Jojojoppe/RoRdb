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
namespace RoRdb\Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $allowPlaybackInterruption;
    /**
     * @var string
     */
    public $audioUri;
    /**
     * @param bool
     */
    public function setAllowPlaybackInterruption($allowPlaybackInterruption)
    {
        $this->allowPlaybackInterruption = $allowPlaybackInterruption;
    }
    /**
     * @return bool
     */
    public function getAllowPlaybackInterruption()
    {
        return $this->allowPlaybackInterruption;
    }
    /**
     * @param string
     */
    public function setAudioUri($audioUri)
    {
        $this->audioUri = $audioUri;
    }
    /**
     * @return string
     */
    public function getAudioUri()
    {
        return $this->audioUri;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio::class, 'RoRdb\\Google_Service_Dialogflow_GoogleCloudDialogflowCxV3beta1ResponseMessagePlayAudio');
