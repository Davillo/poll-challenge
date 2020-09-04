<?php

namespace App\Http\Controllers;

use App\Repositories\PollRepository;
use Illuminate\Http\Request;

class PollController extends Controller
{
    private $pollRepository;

    function __construct(PollRepository $pollRepository)
    {
        $this->pollRepository = $pollRepository;
    }

    function index(){
        $polls = $this->pollRepository->all();
        return view('polls.index', compact('polls'));
    }

    function register(){
        return view('polls.create');
    }

    function store(){

    }

    function show($id){

    }
}
