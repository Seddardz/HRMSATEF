<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 250);
            $table->tinyInteger('saysem_status')->default('1')->comment('واحد مفعل - صفر معطل');
            $table->string('image', 250)->nullable();
            $table->string('phone', 250);
            $table->string('address', 250);
            $table->string('email', 100);
            $table->integer('added_by');
            $table->integer('updated_by')->nullable();
            $table->integer('com_code');
            $table->decimal('after_minute_calculate_delay', 10, 2)->default(0)->comment("بعد كم دقيقة نحسب تأخير حضور");
            $table->decimal('after_minute_calculate_early_departure', 10, 2)->default(0)->comment("بعد كم دقيقة نحسب انصراف مبكر ");
            $table->decimal('after_minute_calculate_quarterday', 10, 2)->default(0)->comment("بعد كم دقيقة مجموع الانصراف المبكر او الحضور المتأخر نخصم ربع يوم ");
            $table->decimal('after_time_half_daycut', 10, 2)->default(0)->comment("  بعد كم مرة انصراف  مبكر او تاخير نخصم نصف يوم ");
            $table->decimal('after_time_allday_daycut', 10, 2)->default(0)->comment("   بعد كم مرة انصراف  مبكر او تاخير نخصم نصف يوم كامل ");
            $table->decimal('monthly_vacation_balance', 10, 2)->default(0)->comment("رصيد اجازات الموظف الشهري");
            $table->decimal('after_days_begin_vacation', 10, 2)->default(0)->comment("بعد كم يوم ينزل رصيد اجازات");
            $table->decimal('first_balance_begin_vacation', 10, 2)->default(0)->comment("الرصيد الاولي المرحل عند تفعيل اجازات الموظف ");
            $table->decimal('sanctions_value_first_abcence')->default(0)->comment("قيمة خصم الايام اول مرة دون ادن");
            $table->decimal('sanctions_value_second_abcence')->default(0)->comment("قيمة خصم الايام ثاني مرة دون ادن");
            $table->decimal('sanctions_value_third_abcence')->default(0)->comment("قيمة خصم الايام ثالث مرة دون ادن");
            $table->decimal('sanctions_value_forth_abcence')->default(0)->comment("قيمة خصم الايام رابع مرة دون ادن");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_panel_settings');
    }
};
