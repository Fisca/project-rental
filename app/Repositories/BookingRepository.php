<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Repositories\BaseRepository;

/**
 * Class BookingRepository
 * @package App\Repositories
 * @version June 15, 2021, 3:08 pm UTC
*/

class BookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'IDCUST',
        'IDBOOKING',
        'BOOKSTART',
        'BOOKEND',
        'BOOKDEST',
        'BOOKPICK',
        'BOOKTOTAL',
        'BOOKSTATUS'
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
        return Booking::class;
    }
}
