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
namespace RoRdb\Google\Service\YouTube;

class ChannelConversionPing extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $context;
    /**
     * @var string
     */
    public $conversionUrl;
    /**
     * @param string
     */
    public function setContext($context)
    {
        $this->context = $context;
    }
    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * @param string
     */
    public function setConversionUrl($conversionUrl)
    {
        $this->conversionUrl = $conversionUrl;
    }
    /**
     * @return string
     */
    public function getConversionUrl()
    {
        return $this->conversionUrl;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ChannelConversionPing::class, 'RoRdb\\Google_Service_YouTube_ChannelConversionPing');
