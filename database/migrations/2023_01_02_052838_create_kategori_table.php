<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kategori', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->timestamps();
		});

		Schema::table('barang', function (Blueprint $table) {
			$table->dropColumn('kategori_barang');
			$table->foreignId('id_kategori')->references('id')->on('kategori');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('kategori');
	}
};
