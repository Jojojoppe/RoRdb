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
namespace RoRdb\Google\Service\Dfareporting;

class ReportFloodlightCriteriaReportProperties extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $includeAttributedIPConversions;
    /**
     * @var bool
     */
    public $includeUnattributedCookieConversions;
    /**
     * @var bool
     */
    public $includeUnattributedIPConversions;
    /**
     * @param bool
     */
    public function setIncludeAttributedIPConversions($includeAttributedIPConversions)
    {
        $this->includeAttributedIPConversions = $includeAttributedIPConversions;
    }
    /**
     * @return bool
     */
    public function getIncludeAttributedIPConversions()
    {
        return $this->includeAttributedIPConversions;
    }
    /**
     * @param bool
     */
    public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions)
    {
        $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
    }
    /**
     * @return bool
     */
    public function getIncludeUnattributedCookieConversions()
    {
        return $this->includeUnattributedCookieConversions;
    }
    /**
     * @param bool
     */
    public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions)
    {
        $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
    }
    /**
     * @return bool
     */
    public function getIncludeUnattributedIPConversions()
    {
        return $this->includeUnattributedIPConversions;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ReportFloodlightCriteriaReportProperties::class, 'RoRdb\\Google_Service_Dfareporting_ReportFloodlightCriteriaReportProperties');
