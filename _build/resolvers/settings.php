<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $ctx_settings = [
        'site_start' => 'index',
        'error_page' => '404',
        //'unauthorized_page' => '401',
        'template_url' => '{assets_url}components/apptemplate/template/',
    ];

    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $contexts = $modx->getIterator('modContext', ['key:!=' => 'mgr']);
            /** @var modContext $context */
            foreach ($contexts as $context) {
                foreach ($ctx_settings as $setting_key => $uri) {
                    $tmp = $modx->getObject('modResource', ['context_key' => $context->key, 'uri' => $uri]);
                    if ($tmp) {
                        $setting_key = ['context_key' => $context->key, 'key' => $setting_key];
                        if (!$tmp2 = $modx->getObject('modContextSetting', $setting_key)) {
                            $tmp2 = $modx->newObject('modContextSetting');
                            $tmp2->fromArray($setting_key, '', true, true);
                        }
                        $tmp2->set('value', $tmp->get('id'));
                        $tmp2->save();
                    }else{
                        $setting_key = ['context_key' => $context->key, 'key' => $setting_key];
                        if (!$tmp2 = $modx->getObject('modContextSetting', $setting_key)) {
                            $tmp2 = $modx->newObject('modContextSetting');
                            $tmp2->fromArray($setting_key, '', true, true);
                        }
                        $tmp2->set('value', $uri);
                        $tmp2->save();
                    }
                }
            }
            break;
    }

}

return true;