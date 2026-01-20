<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->nullable()->after('email');
            }

            if (!Schema::hasColumn('users', 'middle_name')) {
                $table->string('middle_name')->nullable()->after('first_name');
            }

            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->nullable()->after('middle_name');
            }

            if (!Schema::hasColumn('users', 'created_by')) {
                $table->unsignedBigInteger('created_by')->nullable();
            }

            if (!Schema::hasColumn('users', 'updated_by')) {
                $table->unsignedBigInteger('updated_by')->nullable();
            }

            if (!Schema::hasColumn('users', 'avatar_pic')) {
                $table->string('avatar_pic')->nullable();
            }

            if (!Schema::hasColumn('users', 'category')) {
                $table->enum('category', ['internal', 'company', 'customer'])
                      ->default('internal');
            }

            if (!Schema::hasColumn('users', 'is_active')) {
                $table->boolean('is_active')->default(true);
            }

            if (!Schema::hasColumn('users', 'company_id')) {
                $table->unsignedBigInteger('company_id')->nullable();
            }

            if (!Schema::hasColumn('users', 'customer_id')) {
                $table->unsignedBigInteger('customer_id')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            if (Schema::hasColumn('users', 'first_name')) {
                $table->dropColumn('first_name');
            }

            if (Schema::hasColumn('users', 'middle_name')) {
                $table->dropColumn('middle_name');
            }

            if (Schema::hasColumn('users', 'last_name')) {
                $table->dropColumn('last_name');
            }

            if (Schema::hasColumn('users', 'created_by')) {
                $table->dropColumn('created_by');
            }

            if (Schema::hasColumn('users', 'updated_by')) {
                $table->dropColumn('updated_by');
            }

            if (Schema::hasColumn('users', 'avatar_pic')) {
                $table->dropColumn('avatar_pic');
            }

            if (Schema::hasColumn('users', 'category')) {
                $table->dropColumn('category');
            }

            if (Schema::hasColumn('users', 'is_active')) {
                $table->dropColumn('is_active');
            }

            if (Schema::hasColumn('users', 'company_id')) {
                $table->dropColumn('company_id');
            }

            if (Schema::hasColumn('users', 'customer_id')) {
                $table->dropColumn('customer_id');
            }
        });
    }
};
