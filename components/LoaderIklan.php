<?php namespace PanatauSolusindo\Iklan\Components;

use Cms\Classes\ComponentBase;

/**
 * LoaderIklan Component
 */
class LoaderIklan extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Loader Iklan',
            'description' => 'Loader iklan dengan menambahkan script js owlCarousel.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
