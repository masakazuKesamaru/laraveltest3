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
        Schema::create('logsa', function (Blueprint $table) {
            $table->id(); // logs テーブルの主キー
            $table->foreignId('member_id')
                ->constrained('members') // members.id を参照
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('action');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logsa');
    }
};
