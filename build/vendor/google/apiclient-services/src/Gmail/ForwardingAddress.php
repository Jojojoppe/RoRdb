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
namespace RoRdb\Google\Service\Gmail;

class ForwardingAddress extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $forwardingEmail;
    /**
     * @var string
     */
    public $verificationStatus;
    /**
     * @param string
     */
    public function setForwardingEmail($forwardingEmail)
    {
        $this->forwardingEmail = $forwardingEmail;
    }
    /**
     * @return string
     */
    public function getForwardingEmail()
    {
        return $this->forwardingEmail;
    }
    /**
     * @param string
     */
    public function setVerificationStatus($verificationStatus)
    {
        $this->verificationStatus = $verificationStatus;
    }
    /**
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ForwardingAddress::class, 'RoRdb\\Google_Service_Gmail_ForwardingAddress');
