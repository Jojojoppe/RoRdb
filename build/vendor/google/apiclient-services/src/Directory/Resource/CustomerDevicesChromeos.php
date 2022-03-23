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
namespace RoRdb\Google\Service\Directory\Resource;

use RoRdb\Google\Service\Directory\DirectoryChromeosdevicesIssueCommandRequest;
use RoRdb\Google\Service\Directory\DirectoryChromeosdevicesIssueCommandResponse;
/**
 * The "chromeos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google\Service\Directory(...);
 *   $chromeos = $adminService->chromeos;
 *  </code>
 */
class CustomerDevicesChromeos extends \RoRdb\Google\Service\Resource
{
    /**
     * Issues a command for the device to execute. (chromeos.issueCommand)
     *
     * @param string $customerId Immutable. Immutable ID of the Google Workspace
     * account.
     * @param string $deviceId Immutable. Immutable ID of Chrome OS Device.
     * @param DirectoryChromeosdevicesIssueCommandRequest $postBody
     * @param array $optParams Optional parameters.
     * @return DirectoryChromeosdevicesIssueCommandResponse
     */
    public function issueCommand($customerId, $deviceId, DirectoryChromeosdevicesIssueCommandRequest $postBody, $optParams = [])
    {
        $params = ['customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('issueCommand', [$params], DirectoryChromeosdevicesIssueCommandResponse::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CustomerDevicesChromeos::class, 'RoRdb\\Google_Service_Directory_Resource_CustomerDevicesChromeos');