<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestRequest;
use App\questions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class QuestController extends Controller
{

    public function index(QuestRequest $request)
    {
        $data = $request->validated();
         DB::table('questions')->insert([
            'user_id' => $data['user_id'],
            'title' => $data['title'],
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        return 'Accept';
    }
}
