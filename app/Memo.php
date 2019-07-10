<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    /**
     * Increment OFF
     * @var bool
     */
    public $incrementing = false;

    use ModelConfig;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    /**
     * User
     * 1対1
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
