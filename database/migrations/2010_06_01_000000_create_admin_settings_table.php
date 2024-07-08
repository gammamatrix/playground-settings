<?php
/**
 * Playground
 */

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_settings', function (Blueprint $table) {

            // Primary key

            $table->uuid('id')->primary();

            // IDs

            $table->uuid('created_by_id')->nullable()->index();
            $table->uuid('modified_by_id')->nullable()->index();
            $table->uuid('owned_by_id')->nullable()->index();
            $table->uuid('parent_id')->nullable()->index();
            $table->string('setting_type')->nullable()->index();
            $table->string('setting_group')->nullable()->index();

            // Dates

            $table->timestamps();

            $table->softDeletes();

            $table->dateTime('resolved_at')->nullable();
            $table->dateTime('suspended_at')->nullable();

            // Permissions

            $table->bigInteger('gids')->default(0)->unsigned();
            $table->bigInteger('po')->default(0)->unsigned();
            $table->bigInteger('pg')->default(0)->unsigned();
            $table->bigInteger('pw')->default(0)->unsigned();

            // Status

            $table->bigInteger('status')->default(0)->unsigned();
            $table->bigInteger('rank')->default(0);
            $table->bigInteger('size')->default(0);

            // Matrix

            $table->string('matrix')->default('');
            $table->bigInteger('x')->nullable();
            $table->bigInteger('y')->nullable();
            $table->bigInteger('z')->nullable();
            $table->decimal('r', 65, 10)->nullable()->default(null);
            $table->decimal('theta', 10, 6)->nullable()->default(null);
            $table->decimal('rho', 10, 6)->nullable()->default(null);
            $table->decimal('phi', 10, 6)->nullable()->default(null);
            $table->decimal('elevation', 65, 10)->nullable()->default(null);
            $table->decimal('latitude', 8, 6)->nullable()->default(null);
            $table->decimal('longitude', 9, 6)->nullable()->default(null);

            // Flags

            $table->boolean('active')->default(1)->index();
            $table->boolean('encrypted')->default(0);
            $table->boolean('flagged')->default(0);
            $table->boolean('internal')->default(0);
            $table->boolean('locked')->default(0);
            $table->boolean('problem')->default(0);
            $table->boolean('resolved')->default(0);
            $table->boolean('secure')->default(0);
            $table->boolean('suspended')->default(0);
            $table->boolean('unknown')->default(0);

            // Strings

            $table->string('label')->default('');
            $table->string('title')->default('');
            $table->string('byline')->default('');
            $table->string('slug')->nullable()->default(null)->index();
            $table->string('url')->default('');
            $table->string('description')->default('');
            $table->string('introduction')->default('');
            $table->mediumText('content')->nullable();
            $table->mediumText('summary')->nullable();

            // UI

            $table->string('icon')->default('');
            $table->string('image')->default('');
            $table->string('avatar')->default('');
            $table->json('ui')->nullable()->default(new Expression('(JSON_OBJECT())'));

            // JSON

            $table->json('assets')->default(new Expression('(JSON_OBJECT())'));
            $table->json('meta')->default(new Expression('(JSON_OBJECT())'));
            $table->json('notes')->nullable()->default(new Expression('(JSON_ARRAY())'))->comment('Array of note objects');
            $table->json('options')->default(new Expression('(JSON_OBJECT())'));
            $table->json('setting')->default(new Expression('(JSON_OBJECT())'));
            $table->json('sources')->default(new Expression('(JSON_OBJECT())'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_settings');
    }
};
