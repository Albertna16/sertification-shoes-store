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
        Schema::table('feedback',function(Blueprint $table){
            $table->foreignId('order_id')->constrained()->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feedback',function(Blueprint $table){
            $table->dropColumn('order_id');
            // $table->foreignId('order_id')->constrained()->onDelete('cascade');
        });
    }
};
