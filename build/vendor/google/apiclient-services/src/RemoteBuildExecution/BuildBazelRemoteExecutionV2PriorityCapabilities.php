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
namespace RoRdb\Google\Service\RemoteBuildExecution;

class BuildBazelRemoteExecutionV2PriorityCapabilities extends \RoRdb\Google\Collection
{
    protected $collection_key = 'priorities';
    protected $prioritiesType = BuildBazelRemoteExecutionV2PriorityCapabilitiesPriorityRange::class;
    protected $prioritiesDataType = 'array';
    /**
     * @param BuildBazelRemoteExecutionV2PriorityCapabilitiesPriorityRange[]
     */
    public function setPriorities($priorities)
    {
        $this->priorities = $priorities;
    }
    /**
     * @return BuildBazelRemoteExecutionV2PriorityCapabilitiesPriorityRange[]
     */
    public function getPriorities()
    {
        return $this->priorities;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(BuildBazelRemoteExecutionV2PriorityCapabilities::class, 'RoRdb\\Google_Service_RemoteBuildExecution_BuildBazelRemoteExecutionV2PriorityCapabilities');
