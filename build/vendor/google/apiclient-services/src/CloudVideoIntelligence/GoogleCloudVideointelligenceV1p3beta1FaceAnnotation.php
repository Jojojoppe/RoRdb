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

class GoogleCloudVideointelligenceV1p3beta1FaceAnnotation extends \RoRdb\Google\Collection
{
    protected $collection_key = 'segments';
    protected $framesType = GoogleCloudVideointelligenceV1p3beta1FaceFrame::class;
    protected $framesDataType = 'array';
    protected $segmentsType = GoogleCloudVideointelligenceV1p3beta1FaceSegment::class;
    protected $segmentsDataType = 'array';
    /**
     * @var string
     */
    public $thumbnail;
    /**
     * @param GoogleCloudVideointelligenceV1p3beta1FaceFrame[]
     */
    public function setFrames($frames)
    {
        $this->frames = $frames;
    }
    /**
     * @return GoogleCloudVideointelligenceV1p3beta1FaceFrame[]
     */
    public function getFrames()
    {
        return $this->frames;
    }
    /**
     * @param GoogleCloudVideointelligenceV1p3beta1FaceSegment[]
     */
    public function setSegments($segments)
    {
        $this->segments = $segments;
    }
    /**
     * @return GoogleCloudVideointelligenceV1p3beta1FaceSegment[]
     */
    public function getSegments()
    {
        return $this->segments;
    }
    /**
     * @param string
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudVideointelligenceV1p3beta1FaceAnnotation::class, 'RoRdb\\Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p3beta1FaceAnnotation');