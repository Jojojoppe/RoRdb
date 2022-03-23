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
namespace RoRdb\Google\Service\Datastore;

class GoogleDatastoreAdminV1CommonMetadata extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $operationType;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $state;
    /**
     * @param string
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * @param string[]
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }
    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }
    /**
     * @param string
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * @param string
     */
    public function setState($state)
    {
        $this->state = $state;
    }
    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleDatastoreAdminV1CommonMetadata::class, 'RoRdb\\Google_Service_Datastore_GoogleDatastoreAdminV1CommonMetadata');
