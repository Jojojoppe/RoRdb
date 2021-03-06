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
namespace RoRdb\Google\Service\Books;

class UsersettingsNotificationMoreFromAuthors extends \RoRdb\Google\Model
{
    protected $internal_gapi_mappings = ["optedState" => "opted_state"];
    /**
     * @var string
     */
    public $optedState;
    /**
     * @param string
     */
    public function setOptedState($optedState)
    {
        $this->optedState = $optedState;
    }
    /**
     * @return string
     */
    public function getOptedState()
    {
        return $this->optedState;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(UsersettingsNotificationMoreFromAuthors::class, 'RoRdb\\Google_Service_Books_UsersettingsNotificationMoreFromAuthors');
