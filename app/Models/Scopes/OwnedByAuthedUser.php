<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class OwnedByAuthedUser implements Scope
{
    public function apply(Builder $builder, Model $model, string $foreignKey = 'user_id')
    {
        $builder->where($foreignKey, auth()->user()->id);
    }
}
