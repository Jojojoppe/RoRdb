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

class AppRestrictionsSchemaRestrictionRestrictionValue extends \RoRdb\Google\Collection
{
    protected $collection_key = 'valueMultiselect';
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $valueBool;
    /**
     * @var int
     */
    public $valueInteger;
    /**
     * @var string[]
     */
    public $valueMultiselect;
    /**
     * @var string
     */
    public $valueString;
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param bool
     */
    public function setValueBool($valueBool)
    {
        $this->valueBool = $valueBool;
    }
    /**
     * @return bool
     */
    public function getValueBool()
    {
        return $this->valueBool;
    }
    /**
     * @param int
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
    }
    /**
     * @return int
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }
    /**
     * @param string[]
     */
    public function setValueMultiselect($valueMultiselect)
    {
        $this->valueMultiselect = $valueMultiselect;
    }
    /**
     * @return string[]
     */
    public function getValueMultiselect()
    {
        return $this->valueMultiselect;
    }
    /**
     * @param string
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }
    /**
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AppRestrictionsSchemaRestrictionRestrictionValue::class, 'RoRdb\\Google_Service_AndroidEnterprise_AppRestrictionsSchemaRestrictionRestrictionValue');