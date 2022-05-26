<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    public function testAppEnvironment()
    {
        // Melihat environment sekarang
        // $environment = App::environment();

        // var_dump($environment);

        // default environment => testing
        // Karena terdapat hard code di file phpunit.xml
        if (App::environment('testing')) {
            self::assertTrue(true);
        }
    }
}
