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
namespace RoRdb\Google\Service\BigtableAdmin;

class ClusterState extends \RoRdb\Google\Collection
{
    protected $collection_key = 'encryptionInfo';
    protected $encryptionInfoType = EncryptionInfo::class;
    protected $encryptionInfoDataType = 'array';
    /**
     * @var string
     */
    public $replicationState;
    /**
     * @param EncryptionInfo[]
     */
    public function setEncryptionInfo($encryptionInfo)
    {
        $this->encryptionInfo = $encryptionInfo;
    }
    /**
     * @return EncryptionInfo[]
     */
    public function getEncryptionInfo()
    {
        return $this->encryptionInfo;
    }
    /**
     * @param string
     */
    public function setReplicationState($replicationState)
    {
        $this->replicationState = $replicationState;
    }
    /**
     * @return string
     */
    public function getReplicationState()
    {
        return $this->replicationState;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ClusterState::class, 'RoRdb\\Google_Service_BigtableAdmin_ClusterState');