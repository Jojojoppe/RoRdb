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
namespace RoRdb\Google\Service\Docs;

class EmbeddedObjectBorder extends \RoRdb\Google\Model
{
    protected $colorType = OptionalColor::class;
    protected $colorDataType = '';
    /**
     * @var string
     */
    public $dashStyle;
    /**
     * @var string
     */
    public $propertyState;
    protected $widthType = Dimension::class;
    protected $widthDataType = '';
    /**
     * @param OptionalColor
     */
    public function setColor(OptionalColor $color)
    {
        $this->color = $color;
    }
    /**
     * @return OptionalColor
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @param string
     */
    public function setDashStyle($dashStyle)
    {
        $this->dashStyle = $dashStyle;
    }
    /**
     * @return string
     */
    public function getDashStyle()
    {
        return $this->dashStyle;
    }
    /**
     * @param string
     */
    public function setPropertyState($propertyState)
    {
        $this->propertyState = $propertyState;
    }
    /**
     * @return string
     */
    public function getPropertyState()
    {
        return $this->propertyState;
    }
    /**
     * @param Dimension
     */
    public function setWidth(Dimension $width)
    {
        $this->width = $width;
    }
    /**
     * @return Dimension
     */
    public function getWidth()
    {
        return $this->width;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(EmbeddedObjectBorder::class, 'RoRdb\\Google_Service_Docs_EmbeddedObjectBorder');
