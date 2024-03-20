<?php
namespace Lukasmundt\LaravelOwnership\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Lukasmundt\LaravelOwnership\Contracts\CanBeOwner;

trait HasMorphOwner
{
    public function owner(): MorphToMany
    {
        // return $this->morphedByMany(User::class, 'owner', 'model_has_owner', 'ownable_id')->withPivot('ownable_type');
        // return $this->morphToMany(User::class, 'owner', 'model_has_owner', 'ownable_id', 'owner_id', "id", "id", "owner")->withPivot('ownable_type');
        return $this->morphToMany(
            User::class,
            'owner',
            'model_has_owner',
            'ownable_id',
            'owner_id',
            "id",
            "id",
            "owner",
            true
        )->withTimestamps()
            ->withPivotValue('ownable_type', $this::class);
    }

    public function isOwner(CanBeOwner $canBeOwner): bool
    {
        return $this->owner()->get()->contains($canBeOwner);
    }
}