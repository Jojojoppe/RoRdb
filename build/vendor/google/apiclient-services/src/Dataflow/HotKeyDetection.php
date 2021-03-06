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
namespace RoRdb\Google\Service\Dataflow;

class HotKeyDetection extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $hotKeyAge;
    /**
     * @var string
     */
    public $systemName;
    /**
     * @var string
     */
    public $userStepName;
    /**
     * @param string
     */
    public function setHotKeyAge($hotKeyAge)
    {
        $this->hotKeyAge = $hotKeyAge;
    }
    /**
     * @return string
     */
    public function getHotKeyAge()
    {
        return $this->hotKeyAge;
    }
    /**
     * @param string
     */
    public function setSystemName($systemName)
    {
        $this->systemName = $systemName;
    }
    /**
     * @return string
     */
    public function getSystemName()
    {
        return $this->systemName;
    }
    /**
     * @param string
     */
    public function setUserStepName($userStepName)
    {
        $this->userStepName = $userStepName;
    }
    /**
     * @return string
     */
    public function getUserStepName()
    {
        return $this->userStepName;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(HotKeyDetection::class, 'RoRdb\\Google_Service_Dataflow_HotKeyDetection');
