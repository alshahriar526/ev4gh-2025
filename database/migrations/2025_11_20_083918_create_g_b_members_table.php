<?php

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
        Schema::create('g_b_members', function (Blueprint $table) {
           $table->id(); // bigint unsigned AI
            $table->string('full_name', 100);
            $table->longtext('role_ev_gb');
            $table->longtext('designatation_org');
            $table->text('email');
            $table->longtext('short_bio');
            $table->string('photo', 200)->nullable();
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_b_members');
    }
};
