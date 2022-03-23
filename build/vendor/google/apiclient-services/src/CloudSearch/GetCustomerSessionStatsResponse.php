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
namespace RoRdb\Google\Service\CloudSearch;

class GetCustomerSessionStatsResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'stats';
    protected $statsType = CustomerSessionStats::class;
    protected $statsDataType = 'array';
    /**
     * @param CustomerSessionStats[]
     */
    public function setStats($stats)
    {
        $this->stats = $stats;
    }
    /**
     * @return CustomerSessionStats[]
     */
    public function getStats()
    {
        return $this->stats;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GetCustomerSessionStatsResponse::class, 'RoRdb\\Google_Service_CloudSearch_GetCustomerSessionStatsResponse');
