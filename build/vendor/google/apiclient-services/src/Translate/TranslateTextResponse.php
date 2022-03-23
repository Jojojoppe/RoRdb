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

class TranslateTextResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'translations';
    protected $glossaryTranslationsType = Translation::class;
    protected $glossaryTranslationsDataType = 'array';
    protected $translationsType = Translation::class;
    protected $translationsDataType = 'array';
    /**
     * @param Translation[]
     */
    public function setGlossaryTranslations($glossaryTranslations)
    {
        $this->glossaryTranslations = $glossaryTranslations;
    }
    /**
     * @return Translation[]
     */
    public function getGlossaryTranslations()
    {
        return $this->glossaryTranslations;
    }
    /**
     * @param Translation[]
     */
    public function setTranslations($translations)
    {
        $this->translations = $translations;
    }
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(TranslateTextResponse::class, 'RoRdb\\Google_Service_Translate_TranslateTextResponse');
