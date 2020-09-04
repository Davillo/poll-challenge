<?php

namespace App\Http\Controllers;

use App\Http\Requests\PollStoreRequest;
use App\Http\Requests\PollVoteRequest;
use App\Repositories\PollRepository;
use Illuminate\Database\QueryException;
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

    function store(PollStoreRequest $request){
        try {
            $data = $request->validated();
            $this->pollRepository->store($data);
            return redirect()->back()->with('success', 'Enquete criada com sucesso');
        } catch (QueryException $th) {
            return redirect()->back()->with('success', 'Erro criando enquete');
        }
    }

    function show($id){
        try {
            $poll =$this->pollRepository->getAndupdateViews($id);
            return view('polls.show', compact('poll'));
        } catch (QueryException $th) {
            return redirect()->back()->with('success', 'Erro criando enquete');
        }
    }

    function vote(PollVoteRequest $request, $id){
        try {
            $data = $request->validated();
            $this->pollRepository->vote($id, $data['option_id']);
            return redirect()->back()->with('success', 'Voto computado com sucesso');
        } catch (QueryException $th) {
            throw new $th;
            return redirect()->back()->with('error', 'Erro ao computar voto');
        }

    }
}
