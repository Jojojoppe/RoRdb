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
namespace RoRdb\Google\Service\Document;

class GoogleCloudDocumentaiV1beta2DocumentLabel extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $automlModel;
    /**
     * @var float
     */
    public $confidence;
    /**
     * @var string
     */
    public $name;
    /**
     * @param string
     */
    public function setAutomlModel($automlModel)
    {
        $this->automlModel = $automlModel;
    }
    /**
     * @return string
     */
    public function getAutomlModel()
    {
        return $this->automlModel;
    }
    /**
     * @param float
     */
    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
    }
    /**
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
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
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudDocumentaiV1beta2DocumentLabel::class, 'RoRdb\\Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentLabel');
