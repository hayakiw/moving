<?php

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    protected static $initDatabase = false;

    public function setUpDatabase()
    {
        //テスト用DBを使用
        config(['database.default' => 'mysql_tests']);

        if (!static::$initDatabase) {
            \Artisan::call('migrate:reset');
            \Artisan::call('migrate');
            static::$initDatabase = true;

            return;
        }

        DB::table('admins')->delete();
        DB::table('users')->delete();
    }
}
