<?php namespace PanatauSolusindo\Iklan\Components;

use Carbon\Carbon;
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
        return TempatIklan::pluck('nama', 'nama')->toArray();
    }

    public function onRun()
    {
        $penempatanIklanIni = $this->property('penempatanIklanIni');
        $now = Carbon::now()->format('Y-m-d');
        $this->daftarIklanTerpilih = Iklan::with(['penempatan' => function($query) use($penempatanIklanIni){
            $query->whereHas('tempat', function($q) use($penempatanIklanIni) {
                $q->where('nama', $penempatanIklanIni);
            });
        }, 'penempatan.tempat', 'penempatan.gambar_iklan'])
        ->where('tampil_sd', '>=', $now)
        ->get();
        
    }
}
