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
namespace RoRdb\Google\Service\Connectors;

class JwtClaims extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $audience;
    /**
     * @var string
     */
    public $issuer;
    /**
     * @var string
     */
    public $subject;
    /**
     * @param string
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
    }
    /**
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }
    /**
     * @param string
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
    }
    /**
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }
    /**
     * @param string
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(JwtClaims::class, 'RoRdb\\Google_Service_Connectors_JwtClaims');
