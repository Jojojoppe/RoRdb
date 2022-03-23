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
namespace RoRdb\Google\Service\Appengine;

class LivenessCheck extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $checkInterval;
    /**
     * @var string
     */
    public $failureThreshold;
    /**
     * @var string
     */
    public $host;
    /**
     * @var string
     */
    public $initialDelay;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $successThreshold;
    /**
     * @var string
     */
    public $timeout;
    /**
     * @param string
     */
    public function setCheckInterval($checkInterval)
    {
        $this->checkInterval = $checkInterval;
    }
    /**
     * @return string
     */
    public function getCheckInterval()
    {
        return $this->checkInterval;
    }
    /**
     * @param string
     */
    public function setFailureThreshold($failureThreshold)
    {
        $this->failureThreshold = $failureThreshold;
    }
    /**
     * @return string
     */
    public function getFailureThreshold()
    {
        return $this->failureThreshold;
    }
    /**
     * @param string
     */
    public function setHost($host)
    {
        $this->host = $host;
    }
    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }
    /**
     * @param string
     */
    public function setInitialDelay($initialDelay)
    {
        $this->initialDelay = $initialDelay;
    }
    /**
     * @return string
     */
    public function getInitialDelay()
    {
        return $this->initialDelay;
    }
    /**
     * @param string
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @param string
     */
    public function setSuccessThreshold($successThreshold)
    {
        $this->successThreshold = $successThreshold;
    }
    /**
     * @return string
     */
    public function getSuccessThreshold()
    {
        return $this->successThreshold;
    }
    /**
     * @param string
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }
    /**
     * @return string
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LivenessCheck::class, 'RoRdb\\Google_Service_Appengine_LivenessCheck');
