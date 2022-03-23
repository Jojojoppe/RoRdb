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
namespace RoRdb\Google\Service\Container;

class CreateClusterRequest extends \RoRdb\Google\Model
{
    protected $clusterType = Cluster::class;
    protected $clusterDataType = '';
    /**
     * @var string
     */
    public $parent;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $zone;
    /**
     * @param Cluster
     */
    public function setCluster(Cluster $cluster)
    {
        $this->cluster = $cluster;
    }
    /**
     * @return Cluster
     */
    public function getCluster()
    {
        return $this->cluster;
    }
    /**
     * @param string
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
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
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CreateClusterRequest::class, 'RoRdb\\Google_Service_Container_CreateClusterRequest');