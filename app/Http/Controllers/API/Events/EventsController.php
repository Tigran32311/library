<?php

namespace App\Http\Controllers\API\Events;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    public function list()
    {
        $user = auth('sanctum')->id();
        $userData = User::where('id', $user)->first();
        $events = Events::where('org_id',$userData->org_id)->get();

        return response()->json([
            'status' => true,
            'data' => $events,
        ]);
//        dd($userData->org_id);
    }

    public function detail()
    {

    }

    public function add()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }
}
