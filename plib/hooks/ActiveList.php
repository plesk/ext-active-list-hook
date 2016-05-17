<?php

class Modules_HookActiveList_ActiveList extends pm_Hook_ActiveList
{
    public function getItemServices($controller, $action, $itemId)
    {
        if ($controller !== 'web' || ($action !== 'view' && $action !== 'overview')) {
            return [];
        }

        return [
            [
                'icon' => pm_Context::getBaseUrl() . 'images/icon-service1.png',
                'title' => pm_Locale::lmsg('service1Title'),
                'link' => 'service1' . $itemId,
                'toolbar' => [
                    [
                        'title' => pm_Locale::lmsg('action1Title'),
                        'link' => 'action1' . $itemId,
                    ],
                    [
                        'title' => pm_Locale::lmsg('action3Title'),
                        'link' => 'action2' . $itemId,
                    ],
                ],
            ],
            [
                'title' => 'NewService',
                'icon' => pm_Context::getBaseUrl() . 'images/file-manager.png',

                'link' => 'action1' . $itemId,
                'toolbar' => [
                    [
                        'title' => pm_Locale::lmsg('toolbarTitle'),
                        'link' => 'action2' . $itemId,
                    ],
                ],
            ],
        ];
    }
}