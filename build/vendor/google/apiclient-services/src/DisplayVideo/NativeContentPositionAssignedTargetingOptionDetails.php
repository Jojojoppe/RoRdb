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
namespace RoRdb\Google\Service\DisplayVideo;

class NativeContentPositionAssignedTargetingOptionDetails extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $contentPosition;
    /**
     * @var string
     */
    public $targetingOptionId;
    /**
     * @param string
     */
    public function setContentPosition($contentPosition)
    {
        $this->contentPosition = $contentPosition;
    }
    /**
     * @return string
     */
    public function getContentPosition()
    {
        return $this->contentPosition;
    }
    /**
     * @param string
     */
    public function setTargetingOptionId($targetingOptionId)
    {
        $this->targetingOptionId = $targetingOptionId;
    }
    /**
     * @return string
     */
    public function getTargetingOptionId()
    {
        return $this->targetingOptionId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(NativeContentPositionAssignedTargetingOptionDetails::class, 'RoRdb\\Google_Service_DisplayVideo_NativeContentPositionAssignedTargetingOptionDetails');
