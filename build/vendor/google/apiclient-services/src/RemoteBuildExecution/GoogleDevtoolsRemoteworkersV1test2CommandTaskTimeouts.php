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
namespace RoRdb\Google\Service\RemoteBuildExecution;

class GoogleDevtoolsRemoteworkersV1test2CommandTaskTimeouts extends \RoRdb\Google\Model
{
    public $execution;
    public $idle;
    public $shutdown;
    public function setExecution($execution)
    {
        $this->execution = $execution;
    }
    public function getExecution()
    {
        return $this->execution;
    }
    public function setIdle($idle)
    {
        $this->idle = $idle;
    }
    public function getIdle()
    {
        return $this->idle;
    }
    public function setShutdown($shutdown)
    {
        $this->shutdown = $shutdown;
    }
    public function getShutdown()
    {
        return $this->shutdown;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleDevtoolsRemoteworkersV1test2CommandTaskTimeouts::class, 'RoRdb\\Google_Service_RemoteBuildExecution_GoogleDevtoolsRemoteworkersV1test2CommandTaskTimeouts');
