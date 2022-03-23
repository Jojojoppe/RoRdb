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

class DateRange extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $relativeDateRange;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @param string
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }
    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
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
    /**
     * @param string
     */
    public function setRelativeDateRange($relativeDateRange)
    {
        $this->relativeDateRange = $relativeDateRange;
    }
    /**
     * @return string
     */
    public function getRelativeDateRange()
    {
        return $this->relativeDateRange;
    }
    /**
     * @param string
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(DateRange::class, 'RoRdb\\Google_Service_Dfareporting_DateRange');