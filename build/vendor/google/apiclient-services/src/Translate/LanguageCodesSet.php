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
namespace RoRdb\Google\Service\Translate;

class LanguageCodesSet extends \RoRdb\Google\Collection
{
    protected $collection_key = 'languageCodes';
    /**
     * @var string[]
     */
    public $languageCodes;
    /**
     * @param string[]
     */
    public function setLanguageCodes($languageCodes)
    {
        $this->languageCodes = $languageCodes;
    }
    /**
     * @return string[]
     */
    public function getLanguageCodes()
    {
        return $this->languageCodes;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(LanguageCodesSet::class, 'RoRdb\\Google_Service_Translate_LanguageCodesSet');
