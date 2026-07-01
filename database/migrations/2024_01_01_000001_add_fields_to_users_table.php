<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nis')->nullable()->unique()->after('email');
            $table->enum('role', ['admin', 'user'])->default('user')->after('nis');
            $table->string('phone')->nullable()->after('role');
            $table->string('kelas')->nullable()->after('phone');
            $table->enum('status', ['active', 'inactive'])->default('active')->after('kelas');
        });
    }
    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nis', 'role', 'phone', 'kelas', 'status']);
        });
    }
};