<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryailmiahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('karyailmiah', function (Blueprint $table) {
            $table->bigIncrements('Id_karya_ilmiah');
            $table->string('Judul');
            $table->text('Deskripsi');
            $table->string('Penulis');
            $table->string('Pembimbing')->nullable();
            $table->string('ProgramStudi');
            $table->string('JenisKaryaIlmiah');
            $table->string('File');
            $table->string('Status');
            $table->timestamps();
            $table->string('Abstract');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyailmiah');
    }
}
