<?php

use App\Models\grupo;
use App\Models\misiones;
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
        Schema::create('misiongrupos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(misiones::class)->constrained();
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
        Schema::dropIfExists('misiongrupos');
    }
};
