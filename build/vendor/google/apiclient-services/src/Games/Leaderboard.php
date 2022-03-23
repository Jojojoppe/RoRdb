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
namespace RoRdb\Google\Service\Games;

class Leaderboard extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $iconUrl;
    /**
     * @var string
     */
    public $id;
    /**
     * @var bool
     */
    public $isIconUrlDefault;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $order;
    /**
     * @param string
     */
    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
    }
    /**
     * @return string
     */
    public function getIconUrl()
    {
        return $this->iconUrl;
    }
    /**
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param bool
     */
    public function setIsIconUrlDefault($isIconUrlDefault)
    {
        $this->isIconUrlDefault = $isIconUrlDefault;
    }
    /**
     * @return bool
     */
    public function getIsIconUrlDefault()
    {
        return $this->isIconUrlDefault;
    }
    /**
     * @param string
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
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
    public function setOrder($order)
    {
        $this->order = $order;
    }
    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Leaderboard::class, 'RoRdb\\Google_Service_Games_Leaderboard');