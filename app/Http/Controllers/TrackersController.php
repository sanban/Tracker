<?php

namespace App\Http\Controllers;

use Request;
use App\Token;
use App\Http\Requests\ContactFormRequest;
use DB;
use View;
use PDO;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Redirect;

class TrackersController extends Controller
{
    public function index()
    {
        $tokens = Token::all();
        return view('tokens.index',compact('tokens'));
    }


    public function create(string $type)
    {
        if($type == 'open')
            return view('tokens.oform');
        else if($type == 'click')
            return view('tokens.cform');
    }

    public function store(string $type, ContactFormRequest $request)
    {
        if($type == 'open')
        {
            $table = 'tokens';
            $params = ['email' => $request->get('email'),];
            $view = 'tokens.omessage';
        }
        else if($type == 'click')
        {
            $table = 'ctokens';
            $params = ['email' => $request->get('email'), 'link' => $request->get('link'),];
            $view = 'tokens.cmessage';
        }
        $id = DB::table($table)->insertGetId($params);
        DB::table($table)->update(['created_at' => Carbon::now()]);
        if($type == 'open')
            $return = ['id' => $id,];
        else
            $return = ['id' => $id, 'link' => $request->get('link')];
        return view($view,$return);
    }

    public function showStats(string $type)
    {
        if($type == 'open')
        {
            $table = 'tokens';
            $view = 'tokens.ostats';
        }
        else if($type == 'click')
        {
            $table = 'ctokens';
            $view = 'tokens.cstats';
        }
        $tokens = DB::table($table)->get();
        return view($view,['tokens' => $tokens]);
    }

    public function record(string $type, int $id)
    {
        $ip = Request::ip();
        $browser = Request::server('HTTP_USER_AGENT');
        if($type == 'open')
        {
            $token_table = 'tokens';
        }
        else if($type == 'click')
        {
            $token_table = 'ctokens';
        }
        $tokens = DB::table($token_table)->whereId($id)->get();
        foreach($tokens as $token)
        {
            $user_email = $token->email;
        }
        if($type == 'open')
        {
            $storagePath = storage_path('app/public/blank.png');
            DB::table($token_table)->whereId($id)->increment('opened');
            DB::table('opens')->insert(['token_id' => $id, 'email' => $user_email, 'IP' => $ip, 'Browser' => $browser, 'opened_at' => Carbon::now()]);
            return Image::make($storagePath)->response();
        }
        else if($type == 'click')
        {
            DB::table($token_table)->whereId($id)->increment('clicked');
            foreach($tokens as $token)
                $link = $token->link;
            DB::table('clicks')->insert(['token_id' => $id, 'email' => $user_email, 'link' => $link, 'IP' => $ip, 'Browser' => $browser, 'clicked_at' => Carbon::now()]);
            $link = 'http://' . $link;
            return Redirect::to($link);
        }
    }

    public function showIndividualStats(string $type, int $id)
    {
        if($type == 'open')
        {
            $table = 'opens';
            $view = 'tokens.opens';
        }
        else if($type == 'click')
        {
            $table = 'clicks';
            $view = 'tokens.clicks';
        }
        $tokens = DB::table($table)->whereTokenId($id)->get();
        return view($view,['tokens' => $tokens]);
    }

}
