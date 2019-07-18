<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Memo extends Model
{
    /**
     * Increment OFF
     * UUIDなので文字列は自動でインクリメントしない
     * @var bool
     */
    public $incrementing = false;

    use ModelConfig;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['id', 'image_path',];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['updated_at_for_human', 'image_url'];

    /**
     * User
     * 1対1
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 人のために更新
     *
     * @return string
     */
    public function getUpdatedAtForHumanAttribute()
    {
        return $this->attributes['updated_at_for_human'] = $this->updated_at->diffForHumans();
    }

    /**
     * 画像のURL
     *
     * @return |null
     */
    public function getImageUrlAttribute()
    {
        if (Storage::disk('public')->exists($this->image_path)) {
        return $this->attributes['image_url'] = Storage::disk('public')->url($this->image_path);
        }

        return null;
    }
}
