<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->string('category')->default('general')->index()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('documents', fn (Blueprint $t) => $t->dropColumn('category'));
    }
};
