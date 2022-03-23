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

class ChannelGrouping extends \RoRdb\Google\Collection
{
    protected $collection_key = 'rules';
    /**
     * @var string
     */
    public $fallbackName;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $name;
    protected $rulesType = ChannelGroupingRule::class;
    protected $rulesDataType = 'array';
    /**
     * @param string
     */
    public function setFallbackName($fallbackName)
    {
        $this->fallbackName = $fallbackName;
    }
    /**
     * @return string
     */
    public function getFallbackName()
    {
        return $this->fallbackName;
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
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param ChannelGroupingRule[]
     */
    public function setRules($rules)
    {
        $this->rules = $rules;
    }
    /**
     * @return ChannelGroupingRule[]
     */
    public function getRules()
    {
        return $this->rules;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ChannelGrouping::class, 'RoRdb\\Google_Service_Dfareporting_ChannelGrouping');
