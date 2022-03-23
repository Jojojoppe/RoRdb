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
namespace RoRdb\Google\Service\Compute;

class SslCertificateManagedSslCertificate extends \RoRdb\Google\Collection
{
    protected $collection_key = 'domains';
    /**
     * @var string[]
     */
    public $domainStatus;
    /**
     * @var string[]
     */
    public $domains;
    /**
     * @var string
     */
    public $status;
    /**
     * @param string[]
     */
    public function setDomainStatus($domainStatus)
    {
        $this->domainStatus = $domainStatus;
    }
    /**
     * @return string[]
     */
    public function getDomainStatus()
    {
        return $this->domainStatus;
    }
    /**
     * @param string[]
     */
    public function setDomains($domains)
    {
        $this->domains = $domains;
    }
    /**
     * @return string[]
     */
    public function getDomains()
    {
        return $this->domains;
    }
    /**
     * @param string
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SslCertificateManagedSslCertificate::class, 'RoRdb\\Google_Service_Compute_SslCertificateManagedSslCertificate');
