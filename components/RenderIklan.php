<?php namespace PanatauSolusindo\Iklan\Components;

use Cms\Classes\ComponentBase;
use PanatauSolusindo\Iklan\Models\Iklan;
use PanatauSolusindo\Iklan\Models\TempatIklan;

/**
 * RenderIklan Component
 */
class RenderIklan extends ComponentBase
{
    public $daftarIklanTerpilih; 

    public function componentDetails()
    {
        return [
            'name' => 'RenderIklan Component',
            'description' => 'Render iklan berdasarkan posisi'
        ];
    }

    public function defineProperties()
    {
        return [
            'penempatanIklanIni' => [
                'title' => 'Penempatan iklan',
                'description' => 'Pilih templat iklan ini berdasarkan master.',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getPenempatanIklanIniOptions()
    {
        return TempatIklan::pluck('nama', 'id')->toArray();
    }

    public function onRun()
    {
        $penempatanIklanIni = $this->property('penempatanIklanIni');
        $this->daftarIklanTerpilih = Iklan::with(['penempatan' => function($query) use($penempatanIklanIni){
            $query->where('tempat_id', $penempatanIklanIni);
        }, 'penempatan.gambar_iklan', 'penempatan.tempat'])->get();
        
    }
}
