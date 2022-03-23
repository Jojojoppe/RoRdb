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
namespace RoRdb\Google\Service\SASPortalTesting\Resource;

use RoRdb\Google\Service\SASPortalTesting\SasPortalEmpty;
use RoRdb\Google\Service\SASPortalTesting\SasPortalListNodesResponse;
use RoRdb\Google\Service\SASPortalTesting\SasPortalMoveNodeRequest;
use RoRdb\Google\Service\SASPortalTesting\SasPortalNode;
use RoRdb\Google\Service\SASPortalTesting\SasPortalOperation;
/**
 * The "nodes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $prod_tt_sasportalService = new Google\Service\SASPortalTesting(...);
 *   $nodes = $prod_tt_sasportalService->nodes;
 *  </code>
 */
class CustomersNodes extends \RoRdb\Google\Service\Resource
{
    /**
     * Creates a new node. (nodes.create)
     *
     * @param string $parent Required. The parent resource name where the node is to
     * be created.
     * @param SasPortalNode $postBody
     * @param array $optParams Optional parameters.
     * @return SasPortalNode
     */
    public function create($parent, SasPortalNode $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('create', [$params], SasPortalNode::class);
    }
    /**
     * Deletes a node. (nodes.delete)
     *
     * @param string $name Required. The name of the node.
     * @param array $optParams Optional parameters.
     * @return SasPortalEmpty
     */
    public function delete($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = \array_merge($params, $optParams);
        return $this->call('delete', [$params], SasPortalEmpty::class);
    }
    /**
     * Returns a requested node. (nodes.get)
     *
     * @param string $name Required. The name of the node.
     * @param array $optParams Optional parameters.
     * @return SasPortalNode
     */
    public function get($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], SasPortalNode::class);
    }
    /**
     * Lists nodes. (nodes.listCustomersNodes)
     *
     * @param string $parent Required. The parent resource name, for example,
     * "nodes/1".
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter The filter expression. The filter should have the
     * following format: "DIRECT_CHILDREN" or format: "direct_children". The filter
     * is case insensitive. If empty, then no nodes are filtered.
     * @opt_param int pageSize The maximum number of nodes to return in the
     * response.
     * @opt_param string pageToken A pagination token returned from a previous call
     * to ListNodes that indicates where this listing should continue from.
     * @return SasPortalListNodesResponse
     */
    public function listCustomersNodes($parent, $optParams = [])
    {
        $params = ['parent' => $parent];
        $params = \array_merge($params, $optParams);
        return $this->call('list', [$params], SasPortalListNodesResponse::class);
    }
    /**
     * Moves a node under another node or customer. (nodes.move)
     *
     * @param string $name Required. The name of the node to move.
     * @param SasPortalMoveNodeRequest $postBody
     * @param array $optParams Optional parameters.
     * @return SasPortalOperation
     */
    public function move($name, SasPortalMoveNodeRequest $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('move', [$params], SasPortalOperation::class);
    }
    /**
     * Updates an existing node. (nodes.patch)
     *
     * @param string $name Output only. Resource name.
     * @param SasPortalNode $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string updateMask Fields to be updated.
     * @return SasPortalNode
     */
    public function patch($name, SasPortalNode $postBody, $optParams = [])
    {
        $params = ['name' => $name, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('patch', [$params], SasPortalNode::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CustomersNodes::class, 'RoRdb\\Google_Service_SASPortalTesting_Resource_CustomersNodes');
