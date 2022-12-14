<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class QongiroqQilganlar
 * @package App\Models
 * @version December 13, 2022, 9:54 am UTC
 *
 * @property string $familya
 * @property string $ism
 * @property string $sharif
 * @property string $tugulgan_kun
 * @property number $telefon_nomer
 * @property number $parent_telefon
 * @property string $manzil
 * @property integer $oquv_yonalishi
 * @property string $qoshimcha_desc
 * @property string $recall
 * @property string $oquvchi_keladigan_kun
 */
class QongiroqQilganlar extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'qongiroq_qilganlars';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'familya',
        'ism',
        'sharif',
        'tugulgan_kun',
        'telefon_nomer',
        'parent_telefon',
        'manzil',
        'oquv_yonalishi',
        'qoshimcha_desc',
        'recall',
        'oquvchi_keladigan_kun'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'familya' => 'string',
        'ism' => 'string',
        'sharif' => 'string',
        'tugulgan_kun' => 'date',
        'telefon_nomer' => 'double',
        'parent_telefon' => 'double',
        'manzil' => 'string',
        'oquv_yonalishi' => 'integer',
        'qoshimcha_desc' => 'string',
        'recall' => 'string',
        'oquvchi_keladigan_kun' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'familya' => 'required',
        'ism' => 'required',
        'sharif' => 'required',
        'tugulgan_kun' => 'required',
        'telefon_nomer' => 'required',
        'manzil' => 'required',
        'oquv_yonalishi' => 'required'
    ];

    
}
