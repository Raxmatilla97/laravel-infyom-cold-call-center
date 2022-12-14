<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\BaseRepository;

/**
 * Class CategoriesRepository
 * @package App\Repositories
 * @version December 13, 2022, 2:54 am UTC
*/

class CategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image'
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
        return Categories::class;
    }
}
