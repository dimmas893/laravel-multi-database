<?php

namespace App\Http\Controllers;

use App\Models\PostDatabaseFirst;
use App\Models\PostDatabaseSecond;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function first(Request $request){
        PostDatabaseFirst::create([
            'name' =>$request->name
        ]);
        return response()->json([
            'message' => 'berhasil membuat data'
        ]);
    }
    public function second(Request $request){
        PostDatabaseSecond::create([
            'name' =>$request->name
        ]);
        return response()->json([
            'message' => 'berhasil membuat data'
        ]);
    }
}
