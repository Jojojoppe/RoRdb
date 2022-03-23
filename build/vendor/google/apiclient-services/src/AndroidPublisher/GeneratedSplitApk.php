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
namespace RoRdb\Google\Service\AndroidPublisher;

class GeneratedSplitApk extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $downloadId;
    /**
     * @var string
     */
    public $moduleName;
    /**
     * @var string
     */
    public $splitId;
    /**
     * @var int
     */
    public $variantId;
    /**
     * @param string
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;
    }
    /**
     * @return string
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }
    /**
     * @param string
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    }
    /**
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }
    /**
     * @param string
     */
    public function setSplitId($splitId)
    {
        $this->splitId = $splitId;
    }
    /**
     * @return string
     */
    public function getSplitId()
    {
        return $this->splitId;
    }
    /**
     * @param int
     */
    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GeneratedSplitApk::class, 'RoRdb\\Google_Service_AndroidPublisher_GeneratedSplitApk');
