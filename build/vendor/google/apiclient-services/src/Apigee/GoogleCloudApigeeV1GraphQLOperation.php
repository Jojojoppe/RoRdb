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
namespace RoRdb\Google\Service\Apigee;

class GoogleCloudApigeeV1GraphQLOperation extends \RoRdb\Google\Collection
{
    protected $collection_key = 'operationTypes';
    /**
     * @var string
     */
    public $operation;
    /**
     * @var string[]
     */
    public $operationTypes;
    /**
     * @param string
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
    }
    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }
    /**
     * @param string[]
     */
    public function setOperationTypes($operationTypes)
    {
        $this->operationTypes = $operationTypes;
    }
    /**
     * @return string[]
     */
    public function getOperationTypes()
    {
        return $this->operationTypes;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudApigeeV1GraphQLOperation::class, 'RoRdb\\Google_Service_Apigee_GoogleCloudApigeeV1GraphQLOperation');