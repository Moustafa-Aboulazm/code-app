<?php

use App\Enum\DefaultData;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('client');
            $table->date('date')->default(now());
            $table->json('links')->nullable();
            $table->foreignId('category_id')->constrained(Category::TABLE)->cascadeOnDelete();
            $table->boolean('status')->default(DefaultData::ACTIVE);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
