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
namespace RoRdb\Google\Service\RecommendationsAI;

class GoogleCloudRecommendationengineV1beta1BigQuerySource extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $dataSchema;
    /**
     * @var string
     */
    public $datasetId;
    /**
     * @var string
     */
    public $gcsStagingDir;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $tableId;
    /**
     * @param string
     */
    public function setDataSchema($dataSchema)
    {
        $this->dataSchema = $dataSchema;
    }
    /**
     * @return string
     */
    public function getDataSchema()
    {
        return $this->dataSchema;
    }
    /**
     * @param string
     */
    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }
    /**
     * @return string
     */
    public function getDatasetId()
    {
        return $this->datasetId;
    }
    /**
     * @param string
     */
    public function setGcsStagingDir($gcsStagingDir)
    {
        $this->gcsStagingDir = $gcsStagingDir;
    }
    /**
     * @return string
     */
    public function getGcsStagingDir()
    {
        return $this->gcsStagingDir;
    }
    /**
     * @param string
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * @param string
     */
    public function setTableId($tableId)
    {
        $this->tableId = $tableId;
    }
    /**
     * @return string
     */
    public function getTableId()
    {
        return $this->tableId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudRecommendationengineV1beta1BigQuerySource::class, 'RoRdb\\Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1BigQuerySource');