<?php

use App\Models\Hero;
use App\Models\poder;
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
        Schema::create('poderhs', function (Blueprint $table) {
            $table->id();           
            $table->foreignIdFor(Hero::class)->constrained();          
            $table->foreignIdFor(poder::class)->constrained();
            $table->string('nivel');
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
        Schema::dropIfExists('poderhs');
    }
};
