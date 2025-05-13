<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /**
         * マイグレーションをLaravelで管理する以前のスキーマファイル。ローカル環境以外で実行してはいけない。
         */
        if (config("app.env") !== "local" && config("app.env") !== "testing") {
            return;
        }

        $sqlFile = base_path('database/base_schema.sql');
        if (!file_exists($sqlFile)) {
            throw new \Exception("SQL file not found: $sqlFile");
        }

        $sql = file_get_contents($sqlFile);
        DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
