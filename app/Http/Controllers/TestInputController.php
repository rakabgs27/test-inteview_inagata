<?php

namespace App\Http\Controllers;

use App\Models\TestInput;
use App\Http\Requests\StoreTestInputRequest;
use App\Http\Requests\UpdateTestInputRequest;

class TestInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestInputRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestInputRequest $request)
    {
        TestInput::create([
            'input_karakter' => $request->input_karakter
        ]);

        $karakterCount = count_chars($request->input_karakter,1);
        $hasil=[];

        foreach ($karakterCount as $character => $total){
            $hasil[chr($character)] = $total;
        }

        return response()->json(['count'=>$hasil]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestInput  $testInput
     * @return \Illuminate\Http\Response
     */
    public function show(TestInput $testInput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestInput  $testInput
     * @return \Illuminate\Http\Response
     */
    public function edit(TestInput $testInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestInputRequest  $request
     * @param  \App\Models\TestInput  $testInput
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestInputRequest $request, TestInput $testInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestInput  $testInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestInput $testInput)
    {
        //
    }
}
