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
namespace RoRdb\Google\Service\Dns\Resource;

use RoRdb\Google\Service\Dns\ResourceRecordSet;
use RoRdb\Google\Service\Dns\ResourceRecordSetsListResponse;
/**
 * The "resourceRecordSets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dnsService = new Google\Service\Dns(...);
 *   $resourceRecordSets = $dnsService->resourceRecordSets;
 *  </code>
 */
class ResourceRecordSets extends \RoRdb\Google\Service\Resource
{
    /**
     * Creates a new ResourceRecordSet. (resourceRecordSets.create)
     *
     * @param string $project Identifies the project addressed by this request.
     * @param string $location Specifies the location of the resource. This
     * information will be used for routing and will be part of the resource name.
     * @param string $managedZone Identifies the managed zone addressed by this
     * request. Can be the managed zone name or ID.
     * @param ResourceRecordSet $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string clientOperationId For mutating operation requests only. An
     * optional identifier specified by the client. Must be unique for operation
     * resources in the Operations collection.
     * @return ResourceRecordSet
     */
    public function create($project, $location, $managedZone, ResourceRecordSet $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'location' => $location, 'managedZone' => $managedZone, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('create', [$params], ResourceRecordSet::class);
    }
    /**
     * Deletes a previously created ResourceRecordSet. (resourceRecordSets.delete)
     *
     * @param string $project Identifies the project addressed by this request.
     * @param string $location Specifies the location of the resource. This
     * information will be used for routing and will be part of the resource name.
     * @param string $managedZone Identifies the managed zone addressed by this
     * request. Can be the managed zone name or ID.
     * @param string $name Fully qualified domain name.
     * @param string $type RRSet type.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string clientOperationId For mutating operation requests only. An
     * optional identifier specified by the client. Must be unique for operation
     * resources in the Operations collection.
     */
    public function delete($project, $location, $managedZone, $name, $type, $optParams = [])
    {
        $params = ['project' => $project, 'location' => $location, 'managedZone' => $managedZone, 'name' => $name, 'type' => $type];
        $params = \array_merge($params, $optParams);
        return $this->call('delete', [$params]);
    }
    /**
     * Fetches the representation of an existing ResourceRecordSet.
     * (resourceRecordSets.get)
     *
     * @param string $project Identifies the project addressed by this request.
     * @param string $location Specifies the location of the resource. This
     * information will be used for routing and will be part of the resource name.
     * @param string $managedZone Identifies the managed zone addressed by this
     * request. Can be the managed zone name or ID.
     * @param string $name Fully qualified domain name.
     * @param string $type RRSet type.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string clientOperationId For mutating operation requests only. An
     * optional identifier specified by the client. Must be unique for operation
     * resources in the Operations collection.
     * @return ResourceRecordSet
     */
    public function get($project, $location, $managedZone, $name, $type, $optParams = [])
    {
        $params = ['project' => $project, 'location' => $location, 'managedZone' => $managedZone, 'name' => $name, 'type' => $type];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], ResourceRecordSet::class);
    }
    /**
     * Enumerates ResourceRecordSets that you have created but not yet deleted.
     * (resourceRecordSets.listResourceRecordSets)
     *
     * @param string $project Identifies the project addressed by this request.
     * @param string $location Specifies the location of the resource. This
     * information will be used for routing and will be part of the resource name.
     * @param string $managedZone Identifies the managed zone addressed by this
     * request. Can be the managed zone name or ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Optional. Maximum number of results to be returned.
     * If unspecified, the server decides how many results to return.
     * @opt_param string name Restricts the list to return only records with this
     * fully qualified domain name.
     * @opt_param string pageToken Optional. A tag returned by a previous list
     * request that was truncated. Use this parameter to continue a previous list
     * request.
     * @opt_param string type Restricts the list to return only records of this
     * type. If present, the "name" parameter must also be present.
     * @return ResourceRecordSetsListResponse
     */
    public function listResourceRecordSets($project, $location, $managedZone, $optParams = [])
    {
        $params = ['project' => $project, 'location' => $location, 'managedZone' => $managedZone];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], ResourceRecordSetsListResponse::class);
    }
    /**
     * Applies a partial update to an existing ResourceRecordSet.
     * (resourceRecordSets.patch)
     *
     * @param string $project Identifies the project addressed by this request.
     * @param string $location Specifies the location of the resource. This
     * information will be used for routing and will be part of the resource name.
     * @param string $managedZone Identifies the managed zone addressed by this
     * request. Can be the managed zone name or ID.
     * @param string $name Fully qualified domain name.
     * @param string $type RRSet type.
     * @param ResourceRecordSet $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string clientOperationId For mutating operation requests only. An
     * optional identifier specified by the client. Must be unique for operation
     * resources in the Operations collection.
     * @return ResourceRecordSet
     */
    public function patch($project, $location, $managedZone, $name, $type, ResourceRecordSet $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'location' => $location, 'managedZone' => $managedZone, 'name' => $name, 'type' => $type, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('patch', [$params], ResourceRecordSet::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ResourceRecordSets::class, 'RoRdb\\Google_Service_Dns_Resource_ResourceRecordSets');
