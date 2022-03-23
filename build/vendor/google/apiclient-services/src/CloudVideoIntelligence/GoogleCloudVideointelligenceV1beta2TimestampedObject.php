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
namespace RoRdb\Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1beta2TimestampedObject extends \RoRdb\Google\Collection
{
    protected $collection_key = 'landmarks';
    protected $attributesType = GoogleCloudVideointelligenceV1beta2DetectedAttribute::class;
    protected $attributesDataType = 'array';
    protected $landmarksType = GoogleCloudVideointelligenceV1beta2DetectedLandmark::class;
    protected $landmarksDataType = 'array';
    protected $normalizedBoundingBoxType = GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox::class;
    protected $normalizedBoundingBoxDataType = '';
    /**
     * @var string
     */
    public $timeOffset;
    /**
     * @param GoogleCloudVideointelligenceV1beta2DetectedAttribute[]
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
    /**
     * @return GoogleCloudVideointelligenceV1beta2DetectedAttribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    /**
     * @param GoogleCloudVideointelligenceV1beta2DetectedLandmark[]
     */
    public function setLandmarks($landmarks)
    {
        $this->landmarks = $landmarks;
    }
    /**
     * @return GoogleCloudVideointelligenceV1beta2DetectedLandmark[]
     */
    public function getLandmarks()
    {
        return $this->landmarks;
    }
    /**
     * @param GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox
     */
    public function setNormalizedBoundingBox(GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox $normalizedBoundingBox)
    {
        $this->normalizedBoundingBox = $normalizedBoundingBox;
    }
    /**
     * @return GoogleCloudVideointelligenceV1beta2NormalizedBoundingBox
     */
    public function getNormalizedBoundingBox()
    {
        return $this->normalizedBoundingBox;
    }
    /**
     * @param string
     */
    public function setTimeOffset($timeOffset)
    {
        $this->timeOffset = $timeOffset;
    }
    /**
     * @return string
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudVideointelligenceV1beta2TimestampedObject::class, 'RoRdb\\Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1beta2TimestampedObject');
