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

class SolidFill extends \RoRdb\Google\Model
{
    /**
     * @var float
     */
    public $alpha;
    protected $colorType = OpaqueColor::class;
    protected $colorDataType = '';
    /**
     * @param float
     */
    public function setAlpha($alpha)
    {
        $this->alpha = $alpha;
    }
    /**
     * @return float
     */
    public function getAlpha()
    {
        return $this->alpha;
    }
    /**
     * @param OpaqueColor
     */
    public function setColor(OpaqueColor $color)
    {
        $this->color = $color;
    }
    /**
     * @return OpaqueColor
     */
    public function getColor()
    {
        return $this->color;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SolidFill::class, 'RoRdb\\Google_Service_Slides_SolidFill');
