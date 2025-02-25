<?php
/**
 * Copyright 2016 Vercom S.A.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Shinoks\Actions;

use \Shinoks\Tools\EmailLabsRequestLayer;


class AgregateTags extends EmailLabsRequestLayer
{
    /**
     * @var string Method of the request
     */
    protected $method = 'GET';

    /**
     * @var string Name of the action
     */
    protected $action = 'agregate_tags';

    /**
     * @var Added filters
     */
    protected $filters = array();

    /**
     * @var Added params
     */
    protected $params = array( 'offset' => 0, 'limit' => 100, 'sort' => '-created_at' );

    /**
     * @var array Allowed filters
     */
    protected $allowFilters = array( );

    /**
     * @var array Allowed filters
     */
    protected $allowParams = array( 'smtp_account', 'date_from', 'date_to' );

}