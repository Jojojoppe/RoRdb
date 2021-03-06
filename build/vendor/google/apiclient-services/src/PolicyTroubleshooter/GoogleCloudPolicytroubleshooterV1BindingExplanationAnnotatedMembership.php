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
namespace RoRdb\Google\Service\PolicyTroubleshooter;

class GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $membership;
    /**
     * @var string
     */
    public $relevance;
    /**
     * @param string
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;
    }
    /**
     * @return string
     */
    public function getMembership()
    {
        return $this->membership;
    }
    /**
     * @param string
     */
    public function setRelevance($relevance)
    {
        $this->relevance = $relevance;
    }
    /**
     * @return string
     */
    public function getRelevance()
    {
        return $this->relevance;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership::class, 'RoRdb\\Google_Service_PolicyTroubleshooter_GoogleCloudPolicytroubleshooterV1BindingExplanationAnnotatedMembership');
