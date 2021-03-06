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
namespace RoRdb\Google\Service\AdExchangeBuyerII;

class RelativeDateRange extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $durationDays;
    /**
     * @var int
     */
    public $offsetDays;
    /**
     * @param int
     */
    public function setDurationDays($durationDays)
    {
        $this->durationDays = $durationDays;
    }
    /**
     * @return int
     */
    public function getDurationDays()
    {
        return $this->durationDays;
    }
    /**
     * @param int
     */
    public function setOffsetDays($offsetDays)
    {
        $this->offsetDays = $offsetDays;
    }
    /**
     * @return int
     */
    public function getOffsetDays()
    {
        return $this->offsetDays;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(RelativeDateRange::class, 'RoRdb\\Google_Service_AdExchangeBuyerII_RelativeDateRange');
