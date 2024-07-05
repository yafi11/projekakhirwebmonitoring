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
        Schema::create('towerdatas', function (Blueprint $table) {
            $table->id();
            $table->string('siteid');
            $table->string('sitename');
            $table->string('ponumber');
            $table->string('statuspo');
            $table->string('towerprogress');
            $table->string('qcresult');
            $table->date('forecastdate');
            $table->date('acceptdate');
            $table->string('remark')->nullable(false)->default('Description or notes');
            $table->string('leg')->nullable(false)->default('Choose one');
            $table->integer('leg_galv')->nullable(false)->default('00.00');
            $table->string('bracing')->nullable(false)->default('Choose one');
            $table->integer('brac_galv')->nullable(false)->default('00.00');
            $table->string('bordes')->nullable(false)->default('Choose one');
            $table->integer('bds_galv')->nullable(false)->default('00.00');
            $table->string('ladder')->nullable(false)->default('Choose one');
            $table->integer('lad_galv')->nullable(false)->default('00.00');
            $table->string('plate')->nullable(false)->default('Choose one');
            $table->integer('pl_galv')->nullable(false)->default('00.00');
            $table->string('tow_body')->nullable(false)->default('Choose one');
            $table->integer('bod_galv')->nullable(false)->default('00.00');
            $table->string('wrope')->nullable(false)->default('Choose one');
            $table->integer('wr_galv')->nullable(false)->default('00.00');
            $table->string('wclip')->nullable(false)->default('Choose one');
            $table->integer('wc_galv')->nullable(false)->default('00.00');
            $table->string('tn')->nullable(false)->default('Choose one');
            $table->integer('tn_galv')->nullable(false)->default('00.00');
            $table->string('th')->nullable(false)->default('Choose one');
            $table->integer('th_galv')->nullable(false)->default('00.00');
            $table->string('bp')->nullable(false)->default('Choose one');
            $table->integer('bp_galv')->nullable(false)->default('00.00');
            $table->string('bolt')->nullable(false)->default('Choose one');
            $table->integer('bolt_galv')->nullable(false)->default('00.00');
            $table->string('rru')->nullable(false)->default('Choose one');
            $table->integer('rru_galv')->nullable(false)->default('00.00');
            $table->string('rf')->nullable(false)->default('Choose one');
            $table->integer('rf_galv')->nullable(false)->default('00.00');
            $table->string('anc')->nullable(false)->default('Choose one');
            $table->integer('anc_galv')->nullable(false)->default('00.00');
            $table->string('tmp')->nullable(false)->default('Choose one');
            $table->integer('tmp_galv')->nullable(false)->default('00.00');
            $table->string('obl')->nullable(false)->default('Choose one');
            $table->integer('obl_galv')->nullable(false)->default('00.00');
            $table->string('spz')->nullable(false)->default('Choose one');
            $table->integer('spz_galv')->nullable(false)->default('00.00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towerdatas');
    }
};
