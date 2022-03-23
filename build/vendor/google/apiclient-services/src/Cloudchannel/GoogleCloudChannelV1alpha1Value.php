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
namespace RoRdb\Google\Service\Cloudchannel;

class GoogleCloudChannelV1alpha1Value extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $boolValue;
    public $doubleValue;
    /**
     * @var string
     */
    public $int64Value;
    /**
     * @var array[]
     */
    public $protoValue;
    /**
     * @var string
     */
    public $stringValue;
    /**
     * @param bool
     */
    public function setBoolValue($boolValue)
    {
        $this->boolValue = $boolValue;
    }
    /**
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->boolValue;
    }
    public function setDoubleValue($doubleValue)
    {
        $this->doubleValue = $doubleValue;
    }
    public function getDoubleValue()
    {
        return $this->doubleValue;
    }
    /**
     * @param string
     */
    public function setInt64Value($int64Value)
    {
        $this->int64Value = $int64Value;
    }
    /**
     * @return string
     */
    public function getInt64Value()
    {
        return $this->int64Value;
    }
    /**
     * @param array[]
     */
    public function setProtoValue($protoValue)
    {
        $this->protoValue = $protoValue;
    }
    /**
     * @return array[]
     */
    public function getProtoValue()
    {
        return $this->protoValue;
    }
    /**
     * @param string
     */
    public function setStringValue($stringValue)
    {
        $this->stringValue = $stringValue;
    }
    /**
     * @return string
     */
    public function getStringValue()
    {
        return $this->stringValue;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudChannelV1alpha1Value::class, 'RoRdb\\Google_Service_Cloudchannel_GoogleCloudChannelV1alpha1Value');
