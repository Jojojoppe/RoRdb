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
namespace RoRdb\Google\Service\Compute\Resource;

use RoRdb\Google\Service\Compute\Operation;
use RoRdb\Google\Service\Compute\TargetInstance;
use RoRdb\Google\Service\Compute\TargetInstanceAggregatedList;
use RoRdb\Google\Service\Compute\TargetInstanceList;
/**
 * The "targetInstances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google\Service\Compute(...);
 *   $targetInstances = $computeService->targetInstances;
 *  </code>
 */
class TargetInstances extends \RoRdb\Google\Service\Resource
{
    /**
     * Retrieves an aggregated list of target instances.
     * (targetInstances.aggregatedList)
     *
     * @param string $project Project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter A filter expression that filters resources listed in
     * the response. The expression must specify the field name, an operator, and
     * the value that you want to use for filtering. The value must be a string, a
     * number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`,
     * `>=` or `:`. For example, if you are filtering Compute Engine instances, you
     * can exclude instances named `example-instance` by specifying `name !=
     * example-instance`. The `:` operator can be used with string fields to match
     * substrings. For non-string fields it is equivalent to the `=` operator. The
     * `:*` comparison can be used to test whether a key has been defined. For
     * example, to find all objects with `owner` label use: ``` labels.owner:* ```
     * You can also filter nested fields. For example, you could specify
     * `scheduling.automaticRestart = false` to include instances only if they are
     * not scheduled for automatic restarts. You can use filtering on nested fields
     * to filter based on resource labels. To filter on multiple expressions,
     * provide each separate expression within parentheses. For example: ```
     * (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By
     * default, each expression is an `AND` expression. However, you can include
     * `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel
     * Skylake") OR (cpuPlatform = "Intel Broadwell") AND
     * (scheduling.automaticRestart = true) ```
     * @opt_param bool includeAllScopes Indicates whether every visible scope for
     * each scope type (zone, region, global) should be included in the response.
     * For new resource types added after this field, the flag has no effect as new
     * resource types will always include every visible scope for each scope type in
     * response. For resource types which predate this field, if this flag is
     * omitted or false, only scopes of the scope types where the resource type is
     * expected to be found will be included.
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * `maxResults`, Compute Engine returns a `nextPageToken` that can be used to
     * get the next page of results in subsequent list requests. Acceptable values
     * are `0` to `500`, inclusive. (Default: `500`)
     * @opt_param string orderBy Sorts list results by a certain order. By default,
     * results are returned in alphanumerical order based on the resource name. You
     * can also sort results in descending order based on the creation timestamp
     * using `orderBy="creationTimestamp desc"`. This sorts results based on the
     * `creationTimestamp` field in reverse chronological order (newest result
     * first). Use this to sort resources like operations so that the newest
     * operation is returned first. Currently, only sorting by `name` or
     * `creationTimestamp desc` is supported.
     * @opt_param string pageToken Specifies a page token to use. Set `pageToken` to
     * the `nextPageToken` returned by a previous list request to get the next page
     * of results.
     * @opt_param bool returnPartialSuccess Opt-in for partial success behavior
     * which provides partial results in case of failure. The default value is
     * false.
     * @return TargetInstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = [])
    {
        $params = ['project' => $project];
        $params = \array_merge($params, $optParams);
        return $this->call('aggregatedList', [$params], TargetInstanceAggregatedList::class);
    }
    /**
     * Deletes the specified TargetInstance resource. (targetInstances.delete)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to delete.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string requestId An optional request ID to identify requests.
     * Specify a unique request ID so that if you must retry your request, the
     * server will know to ignore the request if it has already been completed. For
     * example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments. The request ID must be a
     * valid UUID with the exception that zero UUID is not supported (
     * 00000000-0000-0000-0000-000000000000).
     * @return Operation
     */
    public function delete($project, $zone, $targetInstance, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance];
        $params = \array_merge($params, $optParams);
        return $this->call('delete', [$params], Operation::class);
    }
    /**
     * Returns the specified TargetInstance resource. Gets a list of available
     * target instances by making a list() request. (targetInstances.get)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to return.
     * @param array $optParams Optional parameters.
     * @return TargetInstance
     */
    public function get($project, $zone, $targetInstance, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], TargetInstance::class);
    }
    /**
     * Creates a TargetInstance resource in the specified project and zone using the
     * data included in the request. (targetInstances.insert)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param TargetInstance $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string requestId An optional request ID to identify requests.
     * Specify a unique request ID so that if you must retry your request, the
     * server will know to ignore the request if it has already been completed. For
     * example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments. The request ID must be a
     * valid UUID with the exception that zero UUID is not supported (
     * 00000000-0000-0000-0000-000000000000).
     * @return Operation
     */
    public function insert($project, $zone, TargetInstance $postBody, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('insert', [$params], Operation::class);
    }
    /**
     * Retrieves a list of TargetInstance resources available to the specified
     * project and zone. (targetInstances.listTargetInstances)
     *
     * @param string $project Project ID for this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter A filter expression that filters resources listed in
     * the response. The expression must specify the field name, an operator, and
     * the value that you want to use for filtering. The value must be a string, a
     * number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`,
     * `>=` or `:`. For example, if you are filtering Compute Engine instances, you
     * can exclude instances named `example-instance` by specifying `name !=
     * example-instance`. The `:` operator can be used with string fields to match
     * substrings. For non-string fields it is equivalent to the `=` operator. The
     * `:*` comparison can be used to test whether a key has been defined. For
     * example, to find all objects with `owner` label use: ``` labels.owner:* ```
     * You can also filter nested fields. For example, you could specify
     * `scheduling.automaticRestart = false` to include instances only if they are
     * not scheduled for automatic restarts. You can use filtering on nested fields
     * to filter based on resource labels. To filter on multiple expressions,
     * provide each separate expression within parentheses. For example: ```
     * (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By
     * default, each expression is an `AND` expression. However, you can include
     * `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel
     * Skylake") OR (cpuPlatform = "Intel Broadwell") AND
     * (scheduling.automaticRestart = true) ```
     * @opt_param string maxResults The maximum number of results per page that
     * should be returned. If the number of available results is larger than
     * `maxResults`, Compute Engine returns a `nextPageToken` that can be used to
     * get the next page of results in subsequent list requests. Acceptable values
     * are `0` to `500`, inclusive. (Default: `500`)
     * @opt_param string orderBy Sorts list results by a certain order. By default,
     * results are returned in alphanumerical order based on the resource name. You
     * can also sort results in descending order based on the creation timestamp
     * using `orderBy="creationTimestamp desc"`. This sorts results based on the
     * `creationTimestamp` field in reverse chronological order (newest result
     * first). Use this to sort resources like operations so that the newest
     * operation is returned first. Currently, only sorting by `name` or
     * `creationTimestamp desc` is supported.
     * @opt_param string pageToken Specifies a page token to use. Set `pageToken` to
     * the `nextPageToken` returned by a previous list request to get the next page
     * of results.
     * @opt_param bool returnPartialSuccess Opt-in for partial success behavior
     * which provides partial results in case of failure. The default value is
     * false.
     * @return TargetInstanceList
     */
    public function listTargetInstances($project, $zone, $optParams = [])
    {
        $params = ['project' => $project, 'zone' => $zone];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], TargetInstanceList::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(TargetInstances::class, 'RoRdb\\Google_Service_Compute_Resource_TargetInstances');
