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
namespace RoRdb\Google\Service\Books;

class FamilyInfoMembership extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $acquirePermission;
    /**
     * @var string
     */
    public $ageGroup;
    /**
     * @var string
     */
    public $allowedMaturityRating;
    /**
     * @var bool
     */
    public $isInFamily;
    /**
     * @var string
     */
    public $role;
    /**
     * @param string
     */
    public function setAcquirePermission($acquirePermission)
    {
        $this->acquirePermission = $acquirePermission;
    }
    /**
     * @return string
     */
    public function getAcquirePermission()
    {
        return $this->acquirePermission;
    }
    /**
     * @param string
     */
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;
    }
    /**
     * @return string
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }
    /**
     * @param string
     */
    public function setAllowedMaturityRating($allowedMaturityRating)
    {
        $this->allowedMaturityRating = $allowedMaturityRating;
    }
    /**
     * @return string
     */
    public function getAllowedMaturityRating()
    {
        return $this->allowedMaturityRating;
    }
    /**
     * @param bool
     */
    public function setIsInFamily($isInFamily)
    {
        $this->isInFamily = $isInFamily;
    }
    /**
     * @return bool
     */
    public function getIsInFamily()
    {
        return $this->isInFamily;
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
\class_alias(FamilyInfoMembership::class, 'RoRdb\\Google_Service_Books_FamilyInfoMembership');
