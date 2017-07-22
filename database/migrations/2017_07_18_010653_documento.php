<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->increments('codigoDoc')->primary();
            $table->string('descripcion', 100);
            $table->integer('numSolicitudTrab');
            //$table->binary('PDFSolicitudTrab');
            //DB::statement("ALTER TABLE documento ADD PDFSolicitudTrab MEDIUMBLOB");
            $table->integer('numCotizacion');
            //$table->binary('PDFCotizacion');
            //DB::statement("ALTER TABLE documento ADD PDFCotizacion MEDIUMBLOB");
            $table->integer('numAdjudicacion');
            //$table->binary('PDFAdjudicacion');
            //DB::statement("ALTER TABLE documento ADD PDFAdjudicacion MEDIUMBLOB");
            $table->integer('numInformeTec');
            //$table->binary('PDFInformeTec');
            //DB::statement("ALTER TABLE documento ADD PDFInformeTec MEDIUMBLOB");
            $table->integer('numGES');
            //$table->binary('PDFGES');
            //DB::statement("ALTER TABLE documento ADD PDFSGES MEDIUMBLOB");
            $table->integer('numFactura');
            //$table->binary('PDFFactura');
            //DB::statement("ALTER TABLE documento ADD PDFFactura MEDIUMBLOB");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
