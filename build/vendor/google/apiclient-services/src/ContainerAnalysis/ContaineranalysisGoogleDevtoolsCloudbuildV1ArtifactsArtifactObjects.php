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
namespace RoRdb\Google\Service\ContainerAnalysis;

class ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects extends \RoRdb\Google\Collection
{
    protected $collection_key = 'paths';
    /**
     * @var string
     */
    public $location;
    /**
     * @var string[]
     */
    public $paths;
    protected $timingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
    protected $timingDataType = '';
    /**
     * @param string
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param string[]
     */
    public function setPaths($paths)
    {
        $this->paths = $paths;
    }
    /**
     * @return string[]
     */
    public function getPaths()
    {
        return $this->paths;
    }
    /**
     * @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan
     */
    public function setTiming(ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan $timing)
    {
        $this->timing = $timing;
    }
    /**
     * @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan
     */
    public function getTiming()
    {
        return $this->timing;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects::class, 'RoRdb\\Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1ArtifactsArtifactObjects');
