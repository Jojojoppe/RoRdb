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
namespace RoRdb\Google\Service\Docs;

class CreateHeaderRequest extends \RoRdb\Google\Model
{
    protected $sectionBreakLocationType = Location::class;
    protected $sectionBreakLocationDataType = '';
    /**
     * @var string
     */
    public $type;
    /**
     * @param Location
     */
    public function setSectionBreakLocation(Location $sectionBreakLocation)
    {
        $this->sectionBreakLocation = $sectionBreakLocation;
    }
    /**
     * @return Location
     */
    public function getSectionBreakLocation()
    {
        return $this->sectionBreakLocation;
    }
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CreateHeaderRequest::class, 'RoRdb\\Google_Service_Docs_CreateHeaderRequest');