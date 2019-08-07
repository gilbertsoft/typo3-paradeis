<?php

/**
 * This file is part of the "sitepackage" extension for TYPO3 CMS.
 *
 * Copyright (C) 2017-2019 by Gilbertsoft (gilbertsoft.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For the full license information, please read the LICENSE file that
 * was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 *
 * Extension Manager/Repository config file for ext "sitepackage".
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage for paradeis.ch',
    'description' => 'TYPO3 sitepackage for paradeis.ch',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gilbertsoft\\Sitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Simon Gilli',
    'author_email' => 'we@gilbertsoft.com',
    'author_company' => 'Gilbertsoft',
    'version' => '0.0.1',
];
