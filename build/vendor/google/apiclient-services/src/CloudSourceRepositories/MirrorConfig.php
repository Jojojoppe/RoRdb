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
namespace RoRdb\Google\Service\CloudSourceRepositories;

class MirrorConfig extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $deployKeyId;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $webhookId;
    /**
     * @param string
     */
    public function setDeployKeyId($deployKeyId)
    {
        $this->deployKeyId = $deployKeyId;
    }
    /**
     * @return string
     */
    public function getDeployKeyId()
    {
        return $this->deployKeyId;
    }
    /**
     * @param string
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string
     */
    public function setWebhookId($webhookId)
    {
        $this->webhookId = $webhookId;
    }
    /**
     * @return string
     */
    public function getWebhookId()
    {
        return $this->webhookId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(MirrorConfig::class, 'RoRdb\\Google_Service_CloudSourceRepositories_MirrorConfig');
