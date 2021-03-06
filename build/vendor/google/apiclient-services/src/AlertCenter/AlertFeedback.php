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
namespace RoRdb\Google\Service\AlertCenter;

class AlertFeedback extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $alertId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $customerId;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $feedbackId;
    /**
     * @var string
     */
    public $type;
    /**
     * @param string
     */
    public function setAlertId($alertId)
    {
        $this->alertId = $alertId;
    }
    /**
     * @return string
     */
    public function getAlertId()
    {
        return $this->alertId;
    }
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
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /**
     * @param string
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param string
     */
    public function setFeedbackId($feedbackId)
    {
        $this->feedbackId = $feedbackId;
    }
    /**
     * @return string
     */
    public function getFeedbackId()
    {
        return $this->feedbackId;
    }
    /**
     * @param string
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AlertFeedback::class, 'RoRdb\\Google_Service_AlertCenter_AlertFeedback');
