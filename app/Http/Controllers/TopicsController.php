<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use Illuminate\Http\Request;

use App\Http\Requests;

class TopicsController extends Controller
{

    /**
     * TopicsController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $topics = Topics::paginate(10);
        return view('home',['topics'=>$topics]);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
