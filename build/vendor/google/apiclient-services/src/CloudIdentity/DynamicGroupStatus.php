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
namespace RoRdb\Google\Service\CloudIdentity;

class DynamicGroupStatus extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusTime;
    /**
     * @param string
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param string
     */
    public function setStatusTime($statusTime)
    {
        $this->statusTime = $statusTime;
    }
    /**
     * @return string
     */
    public function getStatusTime()
    {
        return $this->statusTime;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DynamicGroupStatus::class, 'RoRdb\\Google_Service_CloudIdentity_DynamicGroupStatus');
