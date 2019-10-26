<?php

namespace App\Http\Controllers;

use App\UserTest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $usertests = UserTest::all();
        return view('index',compact('usertests'));
    }

    public function store(Request $request)
    {
        //LOGIC HERE
        $user = new UserTest;
        $user->name = $request->input('name');
        $user->save();
        $userTest = UserTest::where('id', $user->id)->firstOrFail();
        if ($user->save()) {
        	if ($userTest->id % 2 == 0) {
        		$user->parity = 'Even';
        		$user->save();
        	}else{
        		$user->parity = 'Odd';
        		$user->save();
        	}
        		
        }else{
        	echo "Error";
        }

        return redirect()->route('index');
        }
    }

