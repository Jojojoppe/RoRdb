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
namespace RoRdb\Google\Service\CloudIdentity;

class Group extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $displayName;
    protected $dynamicGroupMetadataType = DynamicGroupMetadata::class;
    protected $dynamicGroupMetadataDataType = '';
    protected $groupKeyType = EntityKey::class;
    protected $groupKeyDataType = '';
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $parent;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @param string
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }
    /**
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }
    /**
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param DynamicGroupMetadata
     */
    public function setDynamicGroupMetadata(DynamicGroupMetadata $dynamicGroupMetadata)
    {
        $this->dynamicGroupMetadata = $dynamicGroupMetadata;
    }
    /**
     * @return DynamicGroupMetadata
     */
    public function getDynamicGroupMetadata()
    {
        return $this->dynamicGroupMetadata;
    }
    /**
     * @param EntityKey
     */
    public function setGroupKey(EntityKey $groupKey)
    {
        $this->groupKey = $groupKey;
    }
    /**
     * @return EntityKey
     */
    public function getGroupKey()
    {
        return $this->groupKey;
    }
    /**
     * @param string[]
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }
    /**
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Group::class, 'RoRdb\\Google_Service_CloudIdentity_Group');
