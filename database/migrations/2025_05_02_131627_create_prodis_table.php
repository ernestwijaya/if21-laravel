<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->uuid(column: 'id');
            $table->primary(columns: 'id');
            $table->string(column: 'nama', length: 30);
            $table->char(column: 'singkatan', length: 2);
            $table->string(column: 'kaprodi', length: 30);
            $table->string(column: 'sekretaris', length: 30);
            $table->uuid(column: 'fakultas_id');
            $table->foreign(columns: 'fakultas_id')
            ->References(columns: 'id')->on(table: 'fakultas')
            ->onDelete(action: 'restrict')->onUpdate(action: 'restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
