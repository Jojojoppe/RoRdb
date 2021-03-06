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

class Job extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $reportTypeId;
    /**
     * @var bool
     */
    public $systemManaged;
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
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
    }
    /**
     * @return string
     */
    public function getExpireTime()
    {
        return $this->expireTime;
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
    public function setReportTypeId($reportTypeId)
    {
        $this->reportTypeId = $reportTypeId;
    }
    /**
     * @return string
     */
    public function getReportTypeId()
    {
        return $this->reportTypeId;
    }
    /**
     * @param bool
     */
    public function setSystemManaged($systemManaged)
    {
        $this->systemManaged = $systemManaged;
    }
    /**
     * @return bool
     */
    public function getSystemManaged()
    {
        return $this->systemManaged;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Job::class, 'RoRdb\\Google_Service_YouTubeReporting_Job');
