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

class GameServerConfig extends \RoRdb\Google\Collection
{
    protected $collection_key = 'scalingConfigs';
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    protected $fleetConfigsType = FleetConfig::class;
    protected $fleetConfigsDataType = 'array';
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $name;
    protected $scalingConfigsType = ScalingConfig::class;
    protected $scalingConfigsDataType = 'array';
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
     * @param FleetConfig[]
     */
    public function setFleetConfigs($fleetConfigs)
    {
        $this->fleetConfigs = $fleetConfigs;
    }
    /**
     * @return FleetConfig[]
     */
    public function getFleetConfigs()
    {
        return $this->fleetConfigs;
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
     * @param ScalingConfig[]
     */
    public function setScalingConfigs($scalingConfigs)
    {
        $this->scalingConfigs = $scalingConfigs;
    }
    /**
     * @return ScalingConfig[]
     */
    public function getScalingConfigs()
    {
        return $this->scalingConfigs;
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
\class_alias(GameServerConfig::class, 'RoRdb\\Google_Service_GameServices_GameServerConfig');
