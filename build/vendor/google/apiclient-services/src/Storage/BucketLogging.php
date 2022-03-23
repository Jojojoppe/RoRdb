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
namespace RoRdb\Google\Service\Storage;

class BucketLogging extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $logBucket;
    /**
     * @var string
     */
    public $logObjectPrefix;
    /**
     * @param string
     */
    public function setLogBucket($logBucket)
    {
        $this->logBucket = $logBucket;
    }
    /**
     * @return string
     */
    public function getLogBucket()
    {
        return $this->logBucket;
    }
    /**
     * @param string
     */
    public function setLogObjectPrefix($logObjectPrefix)
    {
        $this->logObjectPrefix = $logObjectPrefix;
    }
    /**
     * @return string
     */
    public function getLogObjectPrefix()
    {
        return $this->logObjectPrefix;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(BucketLogging::class, 'RoRdb\\Google_Service_Storage_BucketLogging');
