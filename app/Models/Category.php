<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version June 2, 2021, 7:48 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $brands
 * @property string $CATNAME
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';

    protected $primaryKey = 'IDCAT';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'CATNAME'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CATNAME' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CATNAME' => 'nullable|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function brands()
    {
        return $this->belongsToMany(\App\Models\Brand::class, 'cars');
    }
}
