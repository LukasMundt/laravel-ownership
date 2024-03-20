<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('model_has_owner', function (Blueprint $table) {
            $table->ulidMorphs('owner');
            $table->ulidMorphs('ownable');
            $table->timestamps();
        });

        Schema::create('model_has_shares', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulidMorphs('sharable');
            $table->boolean('share');
            $table->boolean('edit');
            $table->boolean('create');
            $table->boolean('read');
            $table->boolean('delete');
            $table->boolean('download');
            $table->string('label');
            $table->timestamp('expire_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_has_owner');
        Schema::dropIfExists('model_has_shares');
    }
};
