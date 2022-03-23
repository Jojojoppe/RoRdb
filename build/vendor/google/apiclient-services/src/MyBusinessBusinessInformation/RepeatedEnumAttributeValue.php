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
namespace RoRdb\Google\Service\MyBusinessBusinessInformation;

class RepeatedEnumAttributeValue extends \RoRdb\Google\Collection
{
    protected $collection_key = 'unsetValues';
    /**
     * @var string[]
     */
    public $setValues;
    /**
     * @var string[]
     */
    public $unsetValues;
    /**
     * @param string[]
     */
    public function setSetValues($setValues)
    {
        $this->setValues = $setValues;
    }
    /**
     * @return string[]
     */
    public function getSetValues()
    {
        return $this->setValues;
    }
    /**
     * @param string[]
     */
    public function setUnsetValues($unsetValues)
    {
        $this->unsetValues = $unsetValues;
    }
    /**
     * @return string[]
     */
    public function getUnsetValues()
    {
        return $this->unsetValues;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(RepeatedEnumAttributeValue::class, 'RoRdb\\Google_Service_MyBusinessBusinessInformation_RepeatedEnumAttributeValue');
