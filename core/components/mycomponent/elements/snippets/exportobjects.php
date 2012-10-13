<?php
/**
 * ExportObjects script for MyComponent Extra
 *
 * Copyright 2012 by Bob Ray <http://bobsguides.com>
 *
 * @author Bob Ray
 * 3/27/12
 *
 * ExportObjects is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ExportObjects is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ExportObjects; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package exportobjects
 */
/**
 * MODx ExportObjects script
 *
 * Description:
 * ------------
 * Extracts objects (resources, chunks, snippets, etc.) from a MODX
 * install and creates code and transport build files for
 * MyComponent to use in creating a transport package
 *
 * Warning: Will overwrite code files for resources and elements
 * (except static elements) if CreateObjectFiles is set and dryRun
 * is not set.
 *
 * Warning: Will overwrite transport files and properties for
 * processed elements and resources if CreateTransportFiles is set
 * and dryRun is not set.
 *
 * @package exportobjects
 *
 */
/* @var $category string */

/* Usage
 *
 * Create a snippet called ExportObjects, paste the code or
 * use this for the snippet code:
 *     return http://bit.ly/RJbUf8include 'path/to/this/file';
 *
 * Put a tag for the snippet on a page and preview the page
 *
 * elements in &category will be processed (for menus and system settings, ExportObjects
 * will use the 'namespace' field for the match).
 *
 * This file can be run outside of MODX (e.g., in your editor).
 *
 *  With &dryRun=`1`, no files will be written or modified and the output will go to the screen.
 *
 * Typical snippet call (use your package name instead of MyComponent):
 *
    [[!ExportObjects?
        &category=`MyComponent`
        &packageName=`MyComponent`
        &authorName=`Bob Ray`
        &authorEmail=`<bobray@softville.com>`
        &dryRun=`1`
        &createTransportFiles=`1`
        &createObjectFiles=`1`
        &process=`snippets,chunks,plugins,templates,templateVars,menus,systemSettings`
    ]]

 *
 *
 * Object source files will be written to MODX_ASSETS_PATH/mycomponents/{packageNameLower}/core/components/{packageNameLower}/elements/{elementName}/
 *
 * Transport files will be written to MODX_ASSETS_PATH/mycomponents/{packageNameLower}/_build/data/transport.{elementName}.php
 *
 * &transportPath (directory for transport.chunks.php file)
 * defaults to assets/mycomponents/{categoryLower}/_build/data/
 *
 *
 */

include dirname(dirname(dirname(__FILE__))) . '/model/mycomponent/mycomponentproject.class.php';

$project = new MyComponentProject();
$project->exportComponent(false);
