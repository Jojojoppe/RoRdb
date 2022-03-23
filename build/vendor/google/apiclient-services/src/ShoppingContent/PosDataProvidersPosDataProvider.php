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
namespace RoRdb\Google\Service\ShoppingContent;

class PosDataProvidersPosDataProvider extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $fullName;
    /**
     * @var string
     */
    public $providerId;
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
     * @param string
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
    }
    /**
     * @return string
     */
    public function getProviderId()
    {
        return $this->providerId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(PosDataProvidersPosDataProvider::class, 'RoRdb\\Google_Service_ShoppingContent_PosDataProvidersPosDataProvider');
