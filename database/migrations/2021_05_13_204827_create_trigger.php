<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger', function (Blueprint $table) {
            DB::unprepared('
            CREATE TRIGGER insert_salary AFTER INSERT ON `users` FOR EACH ROW
            BEGIN
                INSERT INTO role_user (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES (3, NEW.id, now(), null);
            END
            ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger');
    }
}
