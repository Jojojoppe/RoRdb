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
namespace RoRdb\Google\Service\Container;

class MonitoringComponentConfig extends \RoRdb\Google\Collection
{
    protected $collection_key = 'enableComponents';
    /**
     * @var string[]
     */
    public $enableComponents;
    /**
     * @param string[]
     */
    public function setEnableComponents($enableComponents)
    {
        $this->enableComponents = $enableComponents;
    }
    /**
     * @return string[]
     */
    public function getEnableComponents()
    {
        return $this->enableComponents;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MonitoringComponentConfig::class, 'RoRdb\\Google_Service_Container_MonitoringComponentConfig');
