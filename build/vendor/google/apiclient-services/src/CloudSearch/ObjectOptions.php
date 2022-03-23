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

class ObjectOptions extends \RoRdb\Google\Model
{
    protected $displayOptionsType = ObjectDisplayOptions::class;
    protected $displayOptionsDataType = '';
    protected $freshnessOptionsType = FreshnessOptions::class;
    protected $freshnessOptionsDataType = '';
    /**
     * @param ObjectDisplayOptions
     */
    public function setDisplayOptions(ObjectDisplayOptions $displayOptions)
    {
        $this->displayOptions = $displayOptions;
    }
    /**
     * @return ObjectDisplayOptions
     */
    public function getDisplayOptions()
    {
        return $this->displayOptions;
    }
    /**
     * @param FreshnessOptions
     */
    public function setFreshnessOptions(FreshnessOptions $freshnessOptions)
    {
        $this->freshnessOptions = $freshnessOptions;
    }
    /**
     * @return FreshnessOptions
     */
    public function getFreshnessOptions()
    {
        return $this->freshnessOptions;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ObjectOptions::class, 'RoRdb\\Google_Service_CloudSearch_ObjectOptions');
