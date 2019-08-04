<?php


/*
 * This file is part of the "Paradeis2017" Extension for TYPO3 CMS.
 *
 * Copyright (C) 2017 by Gilbertsoft (gilbertsoft.org)
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
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Paradeis2017',
    'description' => 'Template 2017 für Paradeis',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'bootstrap_package' => '9.0.0-9.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gilbertsoft\\Paradeis2017\\' => 'Classes'
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
