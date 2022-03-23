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
namespace RoRdb\Google\Service\MyBusinessBusinessCalls\Resource;

use RoRdb\Google\Service\MyBusinessBusinessCalls\BusinessCallsSettings;
/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessbusinesscallsService = new Google\Service\MyBusinessBusinessCalls(...);
 *   $locations = $mybusinessbusinesscallsService->locations;
 *  </code>
 */
class Locations extends \RoRdb\Google\Service\Resource
{
    /**
     * Returns the Business calls settings resource for the given location.
     * (locations.getBusinesscallssettings)
     *
     * @param string $name Required. The BusinessCallsSettings to get. The `name`
     * field is used to identify the business call settings to get. Format:
     * locations/{location_id}/businesscallssettings.
     * @param array $optParams Optional parameters.
     * @return BusinessCallsSettings
     */
    public function getBusinesscallssettings($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = \array_merge($params, $optParams);
        return $this->call('getBusinesscallssettings', [$params], BusinessCallsSettings::class);
    }
    /**
     * Updates the Business call settings for the specified location.
     * (locations.updateBusinesscallssettings)
     *
     * @param string $name Required. The resource name of the calls settings.
     * Format: locations/{location}/businesscallssettings
     * @param BusinessCallsSettings $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask Required. The list of fields to update.
     * @return BusinessCallsSettings
     */
    public function updateBusinesscallssettings($name, BusinessCallsSettings $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('updateBusinesscallssettings', [$params], BusinessCallsSettings::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Locations::class, 'RoRdb\\Google_Service_MyBusinessBusinessCalls_Resource_Locations');
