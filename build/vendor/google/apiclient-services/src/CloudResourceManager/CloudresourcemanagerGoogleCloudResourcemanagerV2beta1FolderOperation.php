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
namespace RoRdb\Google\Service\CloudResourceManager;

class CloudresourcemanagerGoogleCloudResourcemanagerV2beta1FolderOperation extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $destinationParent;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $operationType;
    /**
     * @var string
     */
    public $sourceParent;
    /**
     * @param string
     */
    public function setDestinationParent($destinationParent)
    {
        $this->destinationParent = $destinationParent;
    }
    /**
     * @return string
     */
    public function getDestinationParent()
    {
        return $this->destinationParent;
    }
    /**
     * @param string
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    /**
     * @param string
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }
    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }
    /**
     * @param string
     */
    public function setSourceParent($sourceParent)
    {
        $this->sourceParent = $sourceParent;
    }
    /**
     * @return string
     */
    public function getSourceParent()
    {
        return $this->sourceParent;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CloudresourcemanagerGoogleCloudResourcemanagerV2beta1FolderOperation::class, 'RoRdb\\Google_Service_CloudResourceManager_CloudresourcemanagerGoogleCloudResourcemanagerV2beta1FolderOperation');
