<?php

use App\Models\grupo;
use App\Models\Hero;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupohs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hero::class)->constrained();
            $table->foreignIdFor(grupo::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupohs');
    }
};
