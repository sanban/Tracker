<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use DB;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertOpenToken()
    {
        $this->assertDatabaseHas('tokens', [
            'email' => 'example@example.com'
        ]);
    }

    public function testOpenTokenIsRecorded()
    {
        $numberOfOpens = DB::table('tokens')->whereId('1')->getOpens();
        $this->get('/open/1','TrackersController@record');
        $numberOfOpensAfterAnotherOpen = DB::table('tokens')->whereId('1')->getOpens();
        $this->assertEquals($numberOfOpens+1, $numberOfOpensAfterAnotherOpen);
    }

    public function testClickTokenIsRecorded()
    {
        $numberOfClicks = DB::table('ctokens')->whereId('1')->getClicks();
        $this->get('/click/1','TrackersController@record');
        $numberOfClicksAfterAnotherClick = DB::table('ctokens')->whereId('1')->getClicks();
        $this->assertEquals($numberOfClicks+1, $numberOfClicksAfterAnotherClick);
    }
}
