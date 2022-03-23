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
namespace RoRdb\Google\Service\Dfareporting;

class OmnitureSettings extends \RoRdb\Google\Model
{
    /**
     * @var bool
     */
    public $omnitureCostDataEnabled;
    /**
     * @var bool
     */
    public $omnitureIntegrationEnabled;
    /**
     * @param bool
     */
    public function setOmnitureCostDataEnabled($omnitureCostDataEnabled)
    {
        $this->omnitureCostDataEnabled = $omnitureCostDataEnabled;
    }
    /**
     * @return bool
     */
    public function getOmnitureCostDataEnabled()
    {
        return $this->omnitureCostDataEnabled;
    }
    /**
     * @param bool
     */
    public function setOmnitureIntegrationEnabled($omnitureIntegrationEnabled)
    {
        $this->omnitureIntegrationEnabled = $omnitureIntegrationEnabled;
    }
    /**
     * @return bool
     */
    public function getOmnitureIntegrationEnabled()
    {
        return $this->omnitureIntegrationEnabled;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(OmnitureSettings::class, 'RoRdb\\Google_Service_Dfareporting_OmnitureSettings');
