<?php

namespace Lukasmundt\LaravelOwnership\Contracts;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

interface CanBeOwner {
    // public function owns() : MorphToMany
    // {
    //     return $this->morphToMany(User::class, 'ownable', 'owner_of_model');
    // }
}