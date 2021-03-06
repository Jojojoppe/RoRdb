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
namespace RoRdb\Google\Service\AdExchangeBuyer;

class CreativeFilteringReasons extends \RoRdb\Google\Collection
{
    protected $collection_key = 'reasons';
    public $date;
    protected $reasonsType = CreativeFilteringReasonsReasons::class;
    protected $reasonsDataType = 'array';
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @param CreativeFilteringReasonsReasons[]
     */
    public function setReasons($reasons)
    {
        $this->reasons = $reasons;
    }
    /**
     * @return CreativeFilteringReasonsReasons[]
     */
    public function getReasons()
    {
        return $this->reasons;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CreativeFilteringReasons::class, 'RoRdb\\Google_Service_AdExchangeBuyer_CreativeFilteringReasons');
