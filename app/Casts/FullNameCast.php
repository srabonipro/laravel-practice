<?php

namespace App\Casts;

use Illuminate\Support\Str;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class FullNameCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return $attributes['title'] . '. ' . $attributes['firstname'] . ' ' . $attributes['lastname'];
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return [
            'title' => Str::beforeLast($value, '.'),
            'firstname' => Str::beforeLast(Str::afterLast($value, '.'), ''),
            'lastname' => Str::afterLast($value, ' ')
        ];
    }
}
