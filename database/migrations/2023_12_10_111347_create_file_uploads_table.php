<?php
// database/migrations/xxxx_xx_xx_create_file_uploads_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileUploadsTable extends Migration
{
    public function up()
    {
        Schema::create('file_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->text('deskripsi');
            $table->string('matkul');
            $table->string('pertemuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('file_uploads');
    }
}
