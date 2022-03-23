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
namespace RoRdb\Google\Service\IdentityToolkit;

class IdentitytoolkitRelyingpartyVerifyCustomTokenRequest extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $delegatedProjectNumber;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $returnSecureToken;
    /**
     * @var string
     */
    public $token;
    /**
     * @param string
     */
    public function setDelegatedProjectNumber($delegatedProjectNumber)
    {
        $this->delegatedProjectNumber = $delegatedProjectNumber;
    }
    /**
     * @return string
     */
    public function getDelegatedProjectNumber()
    {
        return $this->delegatedProjectNumber;
    }
    /**
     * @param string
     */
    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
    }
    /**
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }
    /**
     * @param bool
     */
    public function setReturnSecureToken($returnSecureToken)
    {
        $this->returnSecureToken = $returnSecureToken;
    }
    /**
     * @return bool
     */
    public function getReturnSecureToken()
    {
        return $this->returnSecureToken;
    }
    /**
     * @param string
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(IdentitytoolkitRelyingpartyVerifyCustomTokenRequest::class, 'RoRdb\\Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyVerifyCustomTokenRequest');
