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

class Inventory extends \RoRdb\Google\Model
{
    protected $itemsType = Item::class;
    protected $itemsDataType = 'map';
    /**
     * @var string
     */
    public $name;
    protected $osInfoType = OsInfo::class;
    protected $osInfoDataType = '';
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @param Item[]
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
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
     * @param OsInfo
     */
    public function setOsInfo(OsInfo $osInfo)
    {
        $this->osInfo = $osInfo;
    }
    /**
     * @return OsInfo
     */
    public function getOsInfo()
    {
        return $this->osInfo;
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
\class_alias(Inventory::class, 'RoRdb\\Google_Service_CloudAsset_Inventory');
