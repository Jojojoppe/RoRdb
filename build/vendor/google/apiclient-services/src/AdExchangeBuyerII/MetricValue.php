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

class MetricValue extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $variance;
    /**
     * @param string
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string
     */
    public function setVariance($variance)
    {
        $this->variance = $variance;
    }
    /**
     * @return string
     */
    public function getVariance()
    {
        return $this->variance;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MetricValue::class, 'RoRdb\\Google_Service_AdExchangeBuyerII_MetricValue');
