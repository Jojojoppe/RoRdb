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
namespace RoRdb\Google\Service\Apigee;

class GoogleCloudApigeeV1ListAppsResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'app';
    protected $appType = GoogleCloudApigeeV1App::class;
    protected $appDataType = 'array';
    /**
     * @param GoogleCloudApigeeV1App[]
     */
    public function setApp($app)
    {
        $this->app = $app;
    }
    /**
     * @return GoogleCloudApigeeV1App[]
     */
    public function getApp()
    {
        return $this->app;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudApigeeV1ListAppsResponse::class, 'RoRdb\\Google_Service_Apigee_GoogleCloudApigeeV1ListAppsResponse');
