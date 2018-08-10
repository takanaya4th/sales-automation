<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\WebSpider;

class WebSpiderTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWebScraping()
    {
        WebSpider::webScraping();
    }
}
