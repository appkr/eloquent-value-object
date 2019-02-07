<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('고객 이름');
            $table->string('addr_si_do_name')->comment('시도');
            $table->string('addr_si_gun_gu_name')->nullable()->comment('시군구');
            $table->string('addr_admin_dong_name')->nullable()->comment('행정동');
            $table->string('addr_legal_dong_name')->nullable()->comment('법정동');
            $table->string('addr_legal_ri_name')->nullable()->comment('법정리');
            $table->boolean('addr_is_mountain')->default(false)->comment('산 여부 (0:대지, 1:산)');
            $table->string('addr_jibun_number')->nullable()->comment('지번');
            $table->string('addr_road_name')->nullable()->comment('도로명');
            $table->unsignedTinyInteger('addr_is_basement')->default(0)->comment('지하 여부 (0:지상, 1:지하, 2:공중)');
            $table->string('addr_building_number')->nullable()->comment('건물번호');
            $table->string('addr_detail')->nullable()->comment('상세주소 (건물명 등)');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
