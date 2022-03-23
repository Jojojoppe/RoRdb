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
namespace RoRdb\Google\Service\Bigquery;

class ErrorProto extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $debugInfo;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $reason;
    /**
     * @param string
     */
    public function setDebugInfo($debugInfo)
    {
        $this->debugInfo = $debugInfo;
    }
    /**
     * @return string
     */
    public function getDebugInfo()
    {
        return $this->debugInfo;
    }
    /**
     * @param string
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param string
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ErrorProto::class, 'RoRdb\\Google_Service_Bigquery_ErrorProto');
