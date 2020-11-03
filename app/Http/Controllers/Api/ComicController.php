<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function getAll()
    {
        $comics = Comic::all();
        return response()->json($comics);
    }
    public function getById($id)
    {
        $comics = Comic::find($id);
        return response()->json($comics);
    }
}
