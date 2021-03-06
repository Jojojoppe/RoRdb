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
namespace RoRdb\Google\Service\Games;

class EventRecordFailure extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $eventId;
    /**
     * @var string
     */
    public $failureCause;
    /**
     * @var string
     */
    public $kind;
    /**
     * @param string
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }
    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }
    /**
     * @param string
     */
    public function setFailureCause($failureCause)
    {
        $this->failureCause = $failureCause;
    }
    /**
     * @return string
     */
    public function getFailureCause()
    {
        return $this->failureCause;
    }
    /**
     * @param string
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(EventRecordFailure::class, 'RoRdb\\Google_Service_Games_EventRecordFailure');
