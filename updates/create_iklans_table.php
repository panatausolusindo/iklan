<?php namespace PanatauSolusindo\Iklan\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateIklansTable Migration
 */
class CreateIklansTable extends Migration
{
    public function up()
    {
        Schema::create('panatausolusindo_iklan_client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('panatausolusindo_iklan_tempat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->index();
            $table->integer('ukuran_lebar_gambar');
            $table->integer('ukuran_tinggi_gambar');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
        
        Schema::create('panatausolusindo_iklan_', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->index();
            $table->timestamp('tampil_sd')->index();
            $table->string('link')->default('#');
            $table->timestamps();
        });
        
        Schema::create('panatausolusindo_iklan_di_tempat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iklan_id')->nullable()->unsigned()->index();
            $table->integer('tempat_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('panatausolusindo_iklan_di_tempat');
        Schema::dropIfExists('panatausolusindo_iklan_');
        Schema::dropIfExists('panatausolusindo_iklan_tempat');
        Schema::dropIfExists('panatausolusindo_iklan_client');
    }
}
