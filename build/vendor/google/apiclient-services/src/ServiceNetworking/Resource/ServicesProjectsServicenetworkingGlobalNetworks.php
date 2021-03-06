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
namespace RoRdb\Google\Service\ServiceNetworking\Resource;

use RoRdb\Google\Service\ServiceNetworking\ConsumerConfig;
use RoRdb\Google\Service\ServiceNetworking\Operation;
use RoRdb\Google\Service\ServiceNetworking\UpdateConsumerConfigRequest;
/**
 * The "networks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicenetworkingService = new Google\Service\ServiceNetworking(...);
 *   $networks = $servicenetworkingService->networks;
 *  </code>
 */
class ServicesProjectsServicenetworkingGlobalNetworks extends \RoRdb\Google\Service\Resource
{
    /**
     * Service producers use this method to get the configuration of their
     * connection including the import/export of custom routes and subnetwork routes
     * with public IP. (networks.get)
     *
     * @param string $name Required. Name of the consumer config to retrieve in the
     * format: `services/{service}/projects/{project}/global/networks/{network}`.
     * {service} is the peering service that is managing connectivity for the
     * service producer's organization. For Google services that support this
     * functionality, this value is `servicenetworking.googleapis.com`. {project} is
     * a project number e.g. `12345` that contains the service consumer's VPC
     * network. {network} is the name of the service consumer's VPC network.
     * @param array $optParams Optional parameters.
     * @return ConsumerConfig
     */
    public function get($name, $optParams = [])
    {
        $params = ['name' => $name];
        $params = \array_merge($params, $optParams);
        return $this->call('get', [$params], ConsumerConfig::class);
    }
    /**
     * Service producers use this method to update the configuration of their
     * connection including the import/export of custom routes and subnetwork routes
     * with public IP. (networks.updateConsumerConfig)
     *
     * @param string $parent Required. Parent resource identifying the connection
     * for which the consumer config is being updated in the format:
     * `services/{service}/projects/{project}/global/networks/{network}` {service}
     * is the peering service that is managing connectivity for the service
     * producer's organization. For Google services that support this functionality,
     * this value is `servicenetworking.googleapis.com`. {project} is the number of
     * the project that contains the service consumer's VPC network e.g. `12345`.
     * {network} is the name of the service consumer's VPC network.
     * @param UpdateConsumerConfigRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Operation
     */
    public function updateConsumerConfig($parent, UpdateConsumerConfigRequest $postBody, $optParams = [])
    {
        $params = ['parent' => $parent, 'postBody' => $postBody];
        $params = \array_merge($params, $optParams);
        return $this->call('updateConsumerConfig', [$params], Operation::class);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ServicesProjectsServicenetworkingGlobalNetworks::class, 'RoRdb\\Google_Service_ServiceNetworking_Resource_ServicesProjectsServicenetworkingGlobalNetworks');
