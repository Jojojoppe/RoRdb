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
namespace RoRdb\Google\Service\CloudAsset;

class GoogleCloudAssetV1Access extends \RoRdb\Google\Model
{
    protected $analysisStateType = IamPolicyAnalysisState::class;
    protected $analysisStateDataType = '';
    /**
     * @var string
     */
    public $permission;
    /**
     * @var string
     */
    public $role;
    /**
     * @param IamPolicyAnalysisState
     */
    public function setAnalysisState(IamPolicyAnalysisState $analysisState)
    {
        $this->analysisState = $analysisState;
    }
    /**
     * @return IamPolicyAnalysisState
     */
    public function getAnalysisState()
    {
        return $this->analysisState;
    }
    /**
     * @param string
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    }
    /**
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }
    /**
     * @param string
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudAssetV1Access::class, 'RoRdb\\Google_Service_CloudAsset_GoogleCloudAssetV1Access');
