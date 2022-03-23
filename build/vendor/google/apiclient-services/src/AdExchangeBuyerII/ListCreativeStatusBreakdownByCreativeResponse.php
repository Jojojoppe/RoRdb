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
namespace RoRdb\Google\Service\AdExchangeBuyerII;

class ListCreativeStatusBreakdownByCreativeResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'filteredBidCreativeRows';
    protected $filteredBidCreativeRowsType = FilteredBidCreativeRow::class;
    protected $filteredBidCreativeRowsDataType = 'array';
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @param FilteredBidCreativeRow[]
     */
    public function setFilteredBidCreativeRows($filteredBidCreativeRows)
    {
        $this->filteredBidCreativeRows = $filteredBidCreativeRows;
    }
    /**
     * @return FilteredBidCreativeRow[]
     */
    public function getFilteredBidCreativeRows()
    {
        return $this->filteredBidCreativeRows;
    }
    /**
     * @param string
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    /**
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ListCreativeStatusBreakdownByCreativeResponse::class, 'RoRdb\\Google_Service_AdExchangeBuyerII_ListCreativeStatusBreakdownByCreativeResponse');
