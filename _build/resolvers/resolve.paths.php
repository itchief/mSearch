<?php
/**
 * mSearch
 *
 * Copyright 2010 by Shaun McCormick <shaun+msearch@modx.com>
 *
 * mSearch is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * mSearch is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * mSearch; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package msearch
 */
/**
 * Resolve paths. These are useful to change if you want to debug and/or develop
 * in a directory outside of the MODx webroot. They are not required to set
 * for basic usage.
 *
 * @package msearch
 * @subpackage build
 */
/*
function createSetting(&$modx,$key,$value) {
    $ct = $modx->getCount('modSystemSetting',array(
        'key' => 'msearch.'.$key,
    ));
    if (empty($ct)) {
        $setting = $modx->newObject('modSystemSetting');
        $setting->set('key','msearch.'.$key);
        $setting->set('value',$value);
        $setting->set('namespace','msearch');
        $setting->set('area','Paths');
        $setting->save();
    }
}
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            //createSetting($modx,'core_path',$modx->getOption('core_path').'components/msearch/');
            //createSetting($modx,'assets_path',$modx->getOption('assets_path').'components/msearch/');

            //createSetting($modx,'assets_url',$modx->getOption('assets_url').'components/msearch/');
        break;
    }
}
*/
return true;