<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class HomePageTest extends TestCase
{
    public function testCanGetToHomePage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

}