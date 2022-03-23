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
namespace RoRdb\Google\Service\DLP;

class GooglePrivacyDlpV2Trigger extends \RoRdb\Google\Model
{
    protected $manualType = GooglePrivacyDlpV2Manual::class;
    protected $manualDataType = '';
    protected $scheduleType = GooglePrivacyDlpV2Schedule::class;
    protected $scheduleDataType = '';
    /**
     * @param GooglePrivacyDlpV2Manual
     */
    public function setManual(GooglePrivacyDlpV2Manual $manual)
    {
        $this->manual = $manual;
    }
    /**
     * @return GooglePrivacyDlpV2Manual
     */
    public function getManual()
    {
        return $this->manual;
    }
    /**
     * @param GooglePrivacyDlpV2Schedule
     */
    public function setSchedule(GooglePrivacyDlpV2Schedule $schedule)
    {
        $this->schedule = $schedule;
    }
    /**
     * @return GooglePrivacyDlpV2Schedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GooglePrivacyDlpV2Trigger::class, 'RoRdb\\Google_Service_DLP_GooglePrivacyDlpV2Trigger');