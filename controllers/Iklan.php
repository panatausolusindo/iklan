<?php namespace PanatauSolusindo\Iklan\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Iklan Backend Controller
 */
class Iklan extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\RelationController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    public $relationConfig = 'config_relation.yaml';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('PanatauSolusindo.Iklan', 'iklan', 'iklan');
    }
}
