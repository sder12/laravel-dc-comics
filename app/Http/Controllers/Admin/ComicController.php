<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        // $request->validate([
        //     'title' => 'required | min:5 |max:150',
        //     'thumb' => 'required',
        //     'price' => 'required | min:1 | max:20',
        //     'series' => 'required | min:5 | max:100',
        //     'sale_date' => 'required',
        //     'series' => 'type | min:5 | max:50',
        // ]);

        // Creation new element
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }


    //CREARE PRIVATE FUNCTION
    // private function validator($data)
    // {
    //     $validateResult = Validator::make($data, [], [])->validate();
    //     return $validateResult;
    // }

    // private function validator($data)
    // {
    //     $validationResult = Validator::make($data, [
    //         'title' => 'required | min:5 |max:150',
    //         'thumb' => 'required',
    //         'price' => 'required | min:1 | max:20',
    //         'series' => 'required | min:5 | max:100',
    //         'sale_date' => 'required',
    //         'series' => 'type | min:5 | max:50',
    //     ])->validate();
    //     return $validationResult;
    // }

    //NELLO STORE 
    //$data = $this->validation($request->all());
}
