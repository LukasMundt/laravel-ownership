<?php
namespace Lukasmundt\LaravelOwnership\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Lukasmundt\LaravelOwnership\Contracts\CanHaveOwner;

trait HasOwnables
{
    public function owns(): MorphToMany
    {
        // return $this->morphToMany(Projekt::class, 'owner', 'model_has_owner');
        // return dd(fn() => $this->morphedByMany(Projekt::class, 'owner', 'model_has_owner'));
        return $this->morphToMany(
            CanHaveOwner::class,
            'ownable',
            'model_has_owner',
            'owner_id',
            'ownable_id',
            "id",
            "id",
            "ownable",
            true
        )->withTimestamps()
            ->withPivotValue('owner_type', $this::class);
    }
}