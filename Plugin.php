<?php namespace PanatauSolusindo\Iklan;

use Backend;
use System\Classes\PluginBase;

/**
 * Iklan Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Iklan',
            'description' => 'Pengaturan Iklan',
            'author'      => 'PanatauSolusindo',
            'icon'        => 'icon-diamond'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'PanatauSolusindo\Iklan\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'panatausolusindo.iklan.kelola_iklan' => [
                'tab' => 'Iklan',
                'label' => 'Kelola Iklan'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'iklan' => [
                'label'       => 'Iklan',
                'url'         => Backend::url('panatausolusindo/iklan/iklan'),
                'icon'        => 'icon-diamond',
                'permissions' => ['panatausolusindo.iklan.kelola_iklan'],
                'order'       => 500,
                'sideMenu' => [
                    'iklan' => [
                        'label' => 'Daftar Iklan',
                        'icon' => 'icon-list',
                        'url' => Backend::url('panatausolusindo/iklan/iklan'),
                        'permissions' => ['panatausolusindo.iklan.kelola_iklan']
                    ],
                    'client' => [
                        'label' => 'Client',
                        'icon' => 'icon-user',
                        'url' => Backend::url('panatausolusindo/iklan/clientiklan'),
                        'permissions' => ['panatausolusindo.iklan.kelola_iklan']
                    ],
                    'tempat' => [
                        'label' => 'Tempat',
                        'icon' => 'icon-anchor',
                        'url' => Backend::url('panatausolusindo/iklan/tempatiklan'),
                        'permissions' => ['panatausolusindo.iklan.kelola_iklan']
                    ]
                ]
            ],
        ];
    }
}
