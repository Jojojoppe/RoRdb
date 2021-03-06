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
namespace RoRdb\Google\Service\ContainerAnalysis;

class Version extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $epoch;
    /**
     * @var string
     */
    public $fullName;
    /**
     * @var bool
     */
    public $inclusive;
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
    public $revision;
    /**
     * @param int
     */
    public function setEpoch($epoch)
    {
        $this->epoch = $epoch;
    }
    /**
     * @return int
     */
    public function getEpoch()
    {
        return $this->epoch;
    }
    /**
     * @param string
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }
    /**
     * @param bool
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;
    }
    /**
     * @return bool
     */
    public function getInclusive()
    {
        return $this->inclusive;
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
    public function setRevision($revision)
    {
        $this->revision = $revision;
    }
    /**
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Version::class, 'RoRdb\\Google_Service_ContainerAnalysis_Version');
