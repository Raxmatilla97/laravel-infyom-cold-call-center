<?php

namespace App\Repositories;

use App\Models\QongiroqQilganlar;
use App\Repositories\BaseRepository;

/**
 * Class QongiroqQilganlarRepository
 * @package App\Repositories
 * @version December 13, 2022, 9:54 am UTC
*/

class QongiroqQilganlarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return QongiroqQilganlar::class;
    }
}
