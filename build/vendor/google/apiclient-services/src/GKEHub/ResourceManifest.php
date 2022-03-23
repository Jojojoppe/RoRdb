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
namespace RoRdb\Google\Service\GKEHub;

class ResourceManifest extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $clusterScoped;
    /**
     * @var string
     */
    public $manifest;
    /**
     * @param bool
     */
    public function setClusterScoped($clusterScoped)
    {
        $this->clusterScoped = $clusterScoped;
    }
    /**
     * @return bool
     */
    public function getClusterScoped()
    {
        return $this->clusterScoped;
    }
    /**
     * @param string
     */
    public function setManifest($manifest)
    {
        $this->manifest = $manifest;
    }
    /**
     * @return string
     */
    public function getManifest()
    {
        return $this->manifest;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ResourceManifest::class, 'RoRdb\\Google_Service_GKEHub_ResourceManifest');