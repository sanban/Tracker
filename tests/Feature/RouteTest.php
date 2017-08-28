<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /*
     * A basic test example.
     *
     * @return void
     */
    public function testIndexRoute()
    {
        $response = $this->get('/');
        $this->assertEquals(200, $response->status());
    }

    public function testOpenTokenGenerationRoute()
    {
        $response = $this->get('/open');
        $this->assertEquals(200, $response->status());
    }

    public function testClickTokenGenerationRoute()
    {
        $response = $this->get('/click');
        $this->assertEquals(200, $response->status());
    }

    public function testOpenStatsRoute()
    {
        $response = $this->get('/stats/open');
        $this->assertEquals(200, $response->status());
    }

    public function testClickStatsRoute()
    {
        $response = $this->get('/stats/click');
        $this->assertEquals(200, $response->status());
    }

    public function testEmailIsSubmittedForOpenToken()
    {
        $data = ['email' => 'example@example.com'];
        $response = $this->call('POST', '/open', array('email' => 'example@example.com'));
        $this->assertEquals(200, $response->status());
    }

    public function testEmailAndLinkIsSubmittedForClickToken()
    {
        $response = $this->call('POST', '/click', ['email' => 'example@example.com', 'link' => 'example.com']);
        $this->assertEquals(200, $response->status());
    }
}