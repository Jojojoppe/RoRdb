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
namespace RoRdb\Google\Service\Slides;

class LayoutReference extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $layoutId;
    /**
     * @var string
     */
    public $predefinedLayout;
    /**
     * @param string
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;
    }
    /**
     * @return string
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }
    /**
     * @param string
     */
    public function setPredefinedLayout($predefinedLayout)
    {
        $this->predefinedLayout = $predefinedLayout;
    }
    /**
     * @return string
     */
    public function getPredefinedLayout()
    {
        return $this->predefinedLayout;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LayoutReference::class, 'RoRdb\\Google_Service_Slides_LayoutReference');
