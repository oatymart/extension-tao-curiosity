<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2018 (original work) Open Assessment Technologies SA;
 *               
 * 
 */

/**
 * Generated using taoDevTools 3.12.2
 */
return array(
    'name' => 'taoCuriosity',
    'label' => 'taoCuriosity',
    'description' => '',
    'license' => 'GPL-2.0',
    'version' => '0.0.1',
    'author' => 'Open Assessment Technologies SA',
    'requires' => array(
        'tao' => '>=20.3.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#taoCuriosityManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#taoCuriosityManager', array('ext'=>'taoCuriosity')),
    ),
    'install' => array(
        'php' => array(
            __DIR__.'/scripts/install/setThemeConfig.php'
        )
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/taoCuriosity' => 'oat\\taoCuriosity\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'taoCuriosity/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);