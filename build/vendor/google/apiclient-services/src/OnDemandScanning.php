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
namespace RoRdb\Google\Service;

use RoRdb\Google\Client;
/**
 * Service definition for OnDemandScanning (v1).
 *
 * <p>
 * A service to scan container images for vulnerabilities.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/container-analysis/docs/on-demand-scanning/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class OnDemandScanning extends \RoRdb\Google\Service
{
    /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
    const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
    public $projects_locations_operations;
    public $projects_locations_scans;
    public $projects_locations_scans_vulnerabilities;
    /**
     * Constructs the internal representation of the OnDemandScanning service.
     *
     * @param Client|array $clientOrConfig The client used to deliver requests, or a
     *                                     config array to pass to a new Client instance.
     * @param string $rootUrl The root URL used for requests to the service.
     */
    public function __construct($clientOrConfig = [], $rootUrl = null)
    {
        parent::__construct($clientOrConfig);
        $this->rootUrl = $rootUrl ?: 'https://ondemandscanning.googleapis.com/';
        $this->servicePath = '';
        $this->batchPath = 'batch';
        $this->version = 'v1';
        $this->serviceName = 'ondemandscanning';
        $this->projects_locations_operations = new OnDemandScanning\Resource\ProjectsLocationsOperations($this, $this->serviceName, 'operations', ['methods' => ['cancel' => ['path' => 'v1/{+name}:cancel', 'httpMethod' => 'POST', 'parameters' => ['name' => ['location' => 'path', 'type' => 'string', 'required' => \true]]], 'delete' => ['path' => 'v1/{+name}', 'httpMethod' => 'DELETE', 'parameters' => ['name' => ['location' => 'path', 'type' => 'string', 'required' => \true]]], 'get' => ['path' => 'v1/{+name}', 'httpMethod' => 'GET', 'parameters' => ['name' => ['location' => 'path', 'type' => 'string', 'required' => \true]]], 'list' => ['path' => 'v1/{+name}/operations', 'httpMethod' => 'GET', 'parameters' => ['name' => ['location' => 'path', 'type' => 'string', 'required' => \true], 'filter' => ['location' => 'query', 'type' => 'string'], 'pageSize' => ['location' => 'query', 'type' => 'integer'], 'pageToken' => ['location' => 'query', 'type' => 'string']]], 'wait' => ['path' => 'v1/{+name}:wait', 'httpMethod' => 'POST', 'parameters' => ['name' => ['location' => 'path', 'type' => 'string', 'required' => \true], 'timeout' => ['location' => 'query', 'type' => 'string']]]]]);
        $this->projects_locations_scans = new OnDemandScanning\Resource\ProjectsLocationsScans($this, $this->serviceName, 'scans', ['methods' => ['analyzePackages' => ['path' => 'v1/{+parent}/scans:analyzePackages', 'httpMethod' => 'POST', 'parameters' => ['parent' => ['location' => 'path', 'type' => 'string', 'required' => \true]]]]]);
        $this->projects_locations_scans_vulnerabilities = new OnDemandScanning\Resource\ProjectsLocationsScansVulnerabilities($this, $this->serviceName, 'vulnerabilities', ['methods' => ['list' => ['path' => 'v1/{+parent}/vulnerabilities', 'httpMethod' => 'GET', 'parameters' => ['parent' => ['location' => 'path', 'type' => 'string', 'required' => \true], 'pageSize' => ['location' => 'query', 'type' => 'integer'], 'pageToken' => ['location' => 'query', 'type' => 'string']]]]]);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(OnDemandScanning::class, 'RoRdb\\Google_Service_OnDemandScanning');
