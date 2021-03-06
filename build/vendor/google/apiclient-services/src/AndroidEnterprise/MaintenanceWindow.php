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
namespace RoRdb\Google\Service\AndroidEnterprise;

class MaintenanceWindow extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $durationMs;
    /**
     * @var string
     */
    public $startTimeAfterMidnightMs;
    /**
     * @param string
     */
    public function setDurationMs($durationMs)
    {
        $this->durationMs = $durationMs;
    }
    /**
     * @return string
     */
    public function getDurationMs()
    {
        return $this->durationMs;
    }
    /**
     * @param string
     */
    public function setStartTimeAfterMidnightMs($startTimeAfterMidnightMs)
    {
        $this->startTimeAfterMidnightMs = $startTimeAfterMidnightMs;
    }
    /**
     * @return string
     */
    public function getStartTimeAfterMidnightMs()
    {
        return $this->startTimeAfterMidnightMs;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MaintenanceWindow::class, 'RoRdb\\Google_Service_AndroidEnterprise_MaintenanceWindow');
