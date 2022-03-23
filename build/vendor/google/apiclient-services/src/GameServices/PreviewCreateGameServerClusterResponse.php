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
namespace RoRdb\Google\Service\GameServices;

class PreviewCreateGameServerClusterResponse extends \RoRdb\Google\Model
{
    protected $clusterStateType = KubernetesClusterState::class;
    protected $clusterStateDataType = '';
    /**
     * @var string
     */
    public $etag;
    protected $targetStateType = TargetState::class;
    protected $targetStateDataType = '';
    /**
     * @param KubernetesClusterState
     */
    public function setClusterState(KubernetesClusterState $clusterState)
    {
        $this->clusterState = $clusterState;
    }
    /**
     * @return KubernetesClusterState
     */
    public function getClusterState()
    {
        return $this->clusterState;
    }
    /**
     * @param string
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }
    /**
     * @param TargetState
     */
    public function setTargetState(TargetState $targetState)
    {
        $this->targetState = $targetState;
    }
    /**
     * @return TargetState
     */
    public function getTargetState()
    {
        return $this->targetState;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(PreviewCreateGameServerClusterResponse::class, 'RoRdb\\Google_Service_GameServices_PreviewCreateGameServerClusterResponse');
