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
namespace RoRdb\Google\Service\Genomics;

class ContainerStoppedEvent extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $actionId;
    /**
     * @var int
     */
    public $exitStatus;
    /**
     * @var string
     */
    public $stderr;
    /**
     * @param int
     */
    public function setActionId($actionId)
    {
        $this->actionId = $actionId;
    }
    /**
     * @return int
     */
    public function getActionId()
    {
        return $this->actionId;
    }
    /**
     * @param int
     */
    public function setExitStatus($exitStatus)
    {
        $this->exitStatus = $exitStatus;
    }
    /**
     * @return int
     */
    public function getExitStatus()
    {
        return $this->exitStatus;
    }
    /**
     * @param string
     */
    public function setStderr($stderr)
    {
        $this->stderr = $stderr;
    }
    /**
     * @return string
     */
    public function getStderr()
    {
        return $this->stderr;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ContainerStoppedEvent::class, 'RoRdb\\Google_Service_Genomics_ContainerStoppedEvent');
