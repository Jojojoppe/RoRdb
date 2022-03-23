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
namespace RoRdb\Google\Service\Vault;

class AddHeldAccountsRequest extends \RoRdb\Google\Collection
{
    protected $collection_key = 'emails';
    /**
     * @var string[]
     */
    public $accountIds;
    /**
     * @var string[]
     */
    public $emails;
    /**
     * @param string[]
     */
    public function setAccountIds($accountIds)
    {
        $this->accountIds = $accountIds;
    }
    /**
     * @return string[]
     */
    public function getAccountIds()
    {
        return $this->accountIds;
    }
    /**
     * @param string[]
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }
    /**
     * @return string[]
     */
    public function getEmails()
    {
        return $this->emails;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AddHeldAccountsRequest::class, 'RoRdb\\Google_Service_Vault_AddHeldAccountsRequest');
