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
namespace RoRdb\Google\Service\AlertCenter;

class DeviceCompromised extends \RoRdb\Google\Collection
{
    protected $collection_key = 'events';
    /**
     * @var string
     */
    public $email;
    protected $eventsType = DeviceCompromisedSecurityDetail::class;
    protected $eventsDataType = 'array';
    /**
     * @param string
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param DeviceCompromisedSecurityDetail[]
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }
    /**
     * @return DeviceCompromisedSecurityDetail[]
     */
    public function getEvents()
    {
        return $this->events;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DeviceCompromised::class, 'RoRdb\\Google_Service_AlertCenter_DeviceCompromised');
