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
namespace RoRdb\Google\Service\Dataflow;

class JobExecutionDetails extends \RoRdb\Google\Collection
{
    protected $collection_key = 'stages';
    /**
     * @var string
     */
    public $nextPageToken;
    protected $stagesType = StageSummary::class;
    protected $stagesDataType = 'array';
    /**
     * @param string
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    /**
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    /**
     * @param StageSummary[]
     */
    public function setStages($stages)
    {
        $this->stages = $stages;
    }
    /**
     * @return StageSummary[]
     */
    public function getStages()
    {
        return $this->stages;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(JobExecutionDetails::class, 'RoRdb\\Google_Service_Dataflow_JobExecutionDetails');
