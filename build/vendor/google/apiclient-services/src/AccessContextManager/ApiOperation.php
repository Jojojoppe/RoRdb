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
namespace RoRdb\Google\Service\AccessContextManager;

class ApiOperation extends \RoRdb\Google\Collection
{
    protected $collection_key = 'methodSelectors';
    protected $methodSelectorsType = MethodSelector::class;
    protected $methodSelectorsDataType = 'array';
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @param MethodSelector[]
     */
    public function setMethodSelectors($methodSelectors)
    {
        $this->methodSelectors = $methodSelectors;
    }
    /**
     * @return MethodSelector[]
     */
    public function getMethodSelectors()
    {
        return $this->methodSelectors;
    }
    /**
     * @param string
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }
    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ApiOperation::class, 'RoRdb\\Google_Service_AccessContextManager_ApiOperation');