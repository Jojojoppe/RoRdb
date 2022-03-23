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
namespace RoRdb\Google\Service\CloudRetail;

class GoogleCloudRetailV2ProductDetail extends \RoRdb\Google\Model
{
    protected $productType = GoogleCloudRetailV2Product::class;
    protected $productDataType = '';
    /**
     * @var int
     */
    public $quantity;
    /**
     * @param GoogleCloudRetailV2Product
     */
    public function setProduct(GoogleCloudRetailV2Product $product)
    {
        $this->product = $product;
    }
    /**
     * @return GoogleCloudRetailV2Product
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * @param int
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudRetailV2ProductDetail::class, 'RoRdb\\Google_Service_CloudRetail_GoogleCloudRetailV2ProductDetail');
