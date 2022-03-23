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
namespace RoRdb\Google\Service\AuthorizedBuyersMarketplace;

class Client extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $partnerClientId;
    /**
     * @var string
     */
    public $role;
    /**
     * @var bool
     */
    public $sellerVisible;
    /**
     * @var string
     */
    public $state;
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
    public function setPartnerClientId($partnerClientId)
    {
        $this->partnerClientId = $partnerClientId;
    }
    /**
     * @return string
     */
    public function getPartnerClientId()
    {
        return $this->partnerClientId;
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
    /**
     * @param bool
     */
    public function setSellerVisible($sellerVisible)
    {
        $this->sellerVisible = $sellerVisible;
    }
    /**
     * @return bool
     */
    public function getSellerVisible()
    {
        return $this->sellerVisible;
    }
    /**
     * @param string
     */
    public function setState($state)
    {
        $this->state = $state;
    }
    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Client::class, 'RoRdb\\Google_Service_AuthorizedBuyersMarketplace_Client');
