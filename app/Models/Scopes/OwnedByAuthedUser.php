<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

/**
 * Add where for 'user_id' = auth()->user()->id
 */
class OwnedByAuthedUser implements Scope
{
    public function __construct(public string $foreignKey = 'user_id')
    {

    }

    public function apply(Builder $builder, Model $model)
    {
        $builder->where($this->foreignKey, auth()->user()->id);
    }
}
