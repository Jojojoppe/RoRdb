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
namespace RoRdb\Google\Service\YouTubeReporting;

class Report extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $downloadUrl;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $jobExpireTime;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @param string
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }
    /**
     * @return string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }
    /**
     * @param string
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }
    /**
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }
    /**
     * @param string
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string
     */
    public function setJobExpireTime($jobExpireTime)
    {
        $this->jobExpireTime = $jobExpireTime;
    }
    /**
     * @return string
     */
    public function getJobExpireTime()
    {
        return $this->jobExpireTime;
    }
    /**
     * @param string
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
    }
    /**
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }
    /**
     * @param string
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Report::class, 'RoRdb\\Google_Service_YouTubeReporting_Report');
