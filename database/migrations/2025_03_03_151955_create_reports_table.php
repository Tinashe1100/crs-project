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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->longText('evidence');
            $table->string('location');
            $table->string('reporter');
            $table->longText('details');
            $table->string('status')->nullable();
            // foreign key constraints
            $table->foreignId('corruption_type')->constrained('corruption_types', 'id')->onUpdate('cascade')->onDelete('cascade');
            // foreign key constraints
            $table->foreignId('investigator')->nullable()->constrained('users', 'id')->onDelete('set null');
            $table->date('corruption_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
