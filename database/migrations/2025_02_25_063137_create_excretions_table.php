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
        Schema::create('excretions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('member_id')
            ->constrained('members') // members.id を参照
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->date('date');
            $table->time('time');
            $table->string('kind');
            $table->string('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excretions');
    }
};
