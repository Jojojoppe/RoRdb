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
namespace RoRdb\Google\Service\DriveActivity;

class Domain extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $legacyId;
    /**
     * @var string
     */
    public $name;
    /**
     * @param string
     */
    public function setLegacyId($legacyId)
    {
        $this->legacyId = $legacyId;
    }
    /**
     * @return string
     */
    public function getLegacyId()
    {
        return $this->legacyId;
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
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Domain::class, 'RoRdb\\Google_Service_DriveActivity_Domain');
