<?php namespace PanatauSolusindo\Iklan\Models;

use October\Rain\Database\Model as DatabaseModel;

/**
 * TempatIklan Model
 */
class TempatIklan extends DatabaseModel
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table associated with the model
     */
    public $table = 'panatausolusindo_iklan_tempat';

    /**
     * @var array guarded attributes aren't mass assignable
     */
    protected $guarded = ['*'];

    /**
     * @var array fillable attributes are mass assignable
     */
    protected $fillable = [];

    /**
     * @var array rules for validation
     */
    public $rules = [
        'nama' => 'required|unique:panatausolusindo_iklan_tempat',
        'ukuran_lebar_gambar' => 'required|min:0',
        'ukuran_tinggi_gambar' => 'required|min:0',
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array jsonable attribute names that are json encoded and decoded from the database
     */
    protected $jsonable = [];

    /**
     * @var array appends attributes to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array hidden attributes removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array dates attributes that should be mutated to dates
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array hasOne and other relations
     */
    public $hasOne = [];
    public $hasMany = [
        'iklannya' => [IklanDiTempat::class, 'key' => 'tempat_id']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
