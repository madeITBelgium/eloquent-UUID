<?php

namespace MadeITBelgium\Uuid;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Str;

abstract class Model extends BaseModel
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are UUIDs.
     *
     * @var bool
     */
    protected $keyIsUuid = true;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "booting" method of the model.
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}