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
                'title' => pm_Locale::lmsg('service1Title'),
                'icon' => pm_Context::getBaseUrl() . 'images/icon-website.png',
                'link' => '#!',
                'messages' => [
                    [
                        'icon' => pm_Context::getBaseUrl() . 'images/file-manager.png',
                        'info' => pm_Locale::lmsg('serviceMessage1') . ' <a href="#!">example</a>',
                        'noEscape' => true,
                    ],
                ],
            ],
            [
                'title' => pm_Locale::lmsg('service2Title'),
                'icon' => pm_Context::getBaseUrl() . 'images/icon-service1.png',

                'link' => '/smb/web/add-domain',
                'toolbar' => [
                    [
                        'title' => pm_Locale::lmsg('toolbarTitle'),
                        'link' => '#!',
                    ],
                ],
            ],
            [
                'icon' => pm_Context::getBaseUrl() . 'images/attention.png',
                'title' => pm_Locale::lmsg('service4Title'),
                'link' => '#!',
                'toolbar' => [
                    [
                        'title' => pm_Locale::lmsg('action1Title'),
                        'link' => '#!',
                    ],
                    [
                        'title' => pm_Locale::lmsg('action3Title'),
                        'link' => '#!',
                    ],
                ],
            ],
        ];
    }
}