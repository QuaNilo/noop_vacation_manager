<?php

namespace App\View\Menus;

use App\Models\Permission;

class SimpleMenu
{
    /**
     * List of simple menu items.
     */
    public static function menu(): array
    {
        /*If we want to create menus with different options we should define the menu here
            else we can use the default menu from the SideMenu.php file
        */
        return SideMenu::menu();
        /*
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => __('Dashboard'),
                'route_name' => 'dashboard',
                'params' => [],
            ],
            'demos.*' => [
                'icon' => 'files',
                'route_name' => 'demos.index',
                'params' => [],
                'title' => __('Demos'),
                'permissions' => Permission::PERMISSION_ADMIN_FULL_APP,
            ],
            'divider',
            'profile.show' => [
                'icon' => 'user',
                'route_name' => 'profile.show',
                'params' => [],
                'title' => __('My profile')
            ],
            'users' => [
                'icon' => 'users',
                'title' => __('Users'),
                'permissions' => Permission::PERMISSION_MANAGE_APP,
                'sub_menu' => [
                    'users.index' => [
                        'icon' => 'list',
                        'route_name' => 'users.index',
                        'params' => [],
                        'title' => __('List users')
                    ],
                    'users.create' => [
                        'icon' => 'plus-circle',
                        'route_name' => 'users.create',
                        'params' => [],
                        'title' => __('Create user'),

                    ],
                ]
            ],
            'translations' => [
                'icon' => 'globe',
                'route_name' => 'translations.index',
                'params' => [],
                'title' => __('Translations'),
                'permissions' => Permission::PERMISSION_ADMIN_FULL_APP,
            ],
            'settings' => [
                'icon' => 'settings',
                'route_name' => 'settings.index',
                'params' => [],
                'title' => __('Settings'),
                'permissions' => Permission::PERMISSION_ADMIN_APP,
            ],

        ];*/
    }
}
