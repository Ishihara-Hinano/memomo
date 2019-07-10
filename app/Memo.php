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
}
