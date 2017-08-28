<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use DB;
use Carbon\Carbon;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertOpenToken()
    {
        DB::table('tokens')->insert(['email' => 'example@example.com']);
        DB::table('tokens')->update(['created_at' => Carbon::now()]);
        $this->assertDatabaseHas('tokens', [
            'email' => 'example@example.com'
        ]);
    }

    public function testInsertClickToken()
    {
        DB::table('ctokens')->insert(['email' => 'example@example.com', 'link' => 'google.com']);
        DB::table('ctokens')->update(['created_at' => Carbon::now()]);
        $this->assertDatabaseHas('ctokens', [
            'email' => 'example@example.com',
            'link' => 'google.com'
        ]);
    }

    public function testOpenTokenIsRecorded()
    {
        $numberOfOpens = DB::table('tokens')->whereId('1')->value('opened');
        $this->get('/open/1');
        $numberOfOpensAfterAnotherOpen = DB::table('tokens')->whereId('1')->value('opened');
        $this->assertEquals($numberOfOpens+1, $numberOfOpensAfterAnotherOpen);
    }

    public function testClickTokenIsRecorded()
    {
        $numberOfClicks = DB::table('ctokens')->whereId('1')->value('clicked');
        $this->get('/click/1');
        $numberOfClicksAfterAnotherClick = DB::table('ctokens')->whereId('1')->value('clicked');
        $this->assertEquals($numberOfClicks+1, $numberOfClicksAfterAnotherClick);
    }
}
