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
namespace RoRdb\Google\Service\Firestore;

class GoogleFirestoreAdminV1Progress extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $completedWork;
    /**
     * @var string
     */
    public $estimatedWork;
    /**
     * @param string
     */
    public function setCompletedWork($completedWork)
    {
        $this->completedWork = $completedWork;
    }
    /**
     * @return string
     */
    public function getCompletedWork()
    {
        return $this->completedWork;
    }
    /**
     * @param string
     */
    public function setEstimatedWork($estimatedWork)
    {
        $this->estimatedWork = $estimatedWork;
    }
    /**
     * @return string
     */
    public function getEstimatedWork()
    {
        return $this->estimatedWork;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleFirestoreAdminV1Progress::class, 'RoRdb\\Google_Service_Firestore_GoogleFirestoreAdminV1Progress');
