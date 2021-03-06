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
namespace RoRdb\Google\Service\CloudSearch;

class ScoringConfig extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $disableFreshness;
    /**
     * @var bool
     */
    public $disablePersonalization;
    /**
     * @param bool
     */
    public function setDisableFreshness($disableFreshness)
    {
        $this->disableFreshness = $disableFreshness;
    }
    /**
     * @return bool
     */
    public function getDisableFreshness()
    {
        return $this->disableFreshness;
    }
    /**
     * @param bool
     */
    public function setDisablePersonalization($disablePersonalization)
    {
        $this->disablePersonalization = $disablePersonalization;
    }
    /**
     * @return bool
     */
    public function getDisablePersonalization()
    {
        return $this->disablePersonalization;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ScoringConfig::class, 'RoRdb\\Google_Service_CloudSearch_ScoringConfig');
