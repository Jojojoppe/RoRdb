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

class BuildBazelRemoteExecutionV2ExecuteRequest extends \RoRdb\Google\Model
{
    protected $actionDigestType = BuildBazelRemoteExecutionV2Digest::class;
    protected $actionDigestDataType = '';
    protected $executionPolicyType = BuildBazelRemoteExecutionV2ExecutionPolicy::class;
    protected $executionPolicyDataType = '';
    protected $resultsCachePolicyType = BuildBazelRemoteExecutionV2ResultsCachePolicy::class;
    protected $resultsCachePolicyDataType = '';
    public $skipCacheLookup;
    /**
     * @param BuildBazelRemoteExecutionV2Digest
     */
    public function setActionDigest(BuildBazelRemoteExecutionV2Digest $actionDigest)
    {
        $this->actionDigest = $actionDigest;
    }
    /**
     * @return BuildBazelRemoteExecutionV2Digest
     */
    public function getActionDigest()
    {
        return $this->actionDigest;
    }
    /**
     * @param BuildBazelRemoteExecutionV2ExecutionPolicy
     */
    public function setExecutionPolicy(BuildBazelRemoteExecutionV2ExecutionPolicy $executionPolicy)
    {
        $this->executionPolicy = $executionPolicy;
    }
    /**
     * @return BuildBazelRemoteExecutionV2ExecutionPolicy
     */
    public function getExecutionPolicy()
    {
        return $this->executionPolicy;
    }
    /**
     * @param BuildBazelRemoteExecutionV2ResultsCachePolicy
     */
    public function setResultsCachePolicy(BuildBazelRemoteExecutionV2ResultsCachePolicy $resultsCachePolicy)
    {
        $this->resultsCachePolicy = $resultsCachePolicy;
    }
    /**
     * @return BuildBazelRemoteExecutionV2ResultsCachePolicy
     */
    public function getResultsCachePolicy()
    {
        return $this->resultsCachePolicy;
    }
    public function setSkipCacheLookup($skipCacheLookup)
    {
        $this->skipCacheLookup = $skipCacheLookup;
    }
    public function getSkipCacheLookup()
    {
        return $this->skipCacheLookup;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(BuildBazelRemoteExecutionV2ExecuteRequest::class, 'RoRdb\\Google_Service_RemoteBuildExecution_BuildBazelRemoteExecutionV2ExecuteRequest');
