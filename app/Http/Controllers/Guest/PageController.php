<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comic;



class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comicData = $request->all();

        $newComic = new Comic();
        $newComic->title = $comicData['title'];
        $newComic->description = $comicData['description'];
        $newComic->thumb = $comicData['thumb'];
        $newComic->price =  $comicData['price'];
        $newComic->series = $comicData['series'];
        $newComic->sale_date = $comicData['sale_date'];
        $newComic->type = $comicData['type'];
        $newComic->artists = is_array($comicData['artists']) ? implode(', ', $comicData['artists']) : '';
        $newComic->writers = is_array($comicData['writers']) ? implode(', ', $comicData['writers']) : '';
        $newComic->save();

        return redirect()->route('comic.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(comic $comic)
    {
        return view('comic.show', compact('comic'));
    }

    public function show_old_senza_dependecy_injection($id)
    {
        $comic = Comic::find($id);

        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comic)
    {

        $comicData = $request->all();

        $comic->title = $comicData['title'];
        $comic->description = $comicData['description'];
        $comic->thumb = $comicData['thumb'];
        $comic->price =  $comicData['price'];
        $comic->series = $comicData['series'];
        $comic->sale_date = $comicData['sale_date'];
        $comic->type = $comicData['type'];
        $comic->artists = is_array($comicData['artists']) ? implode(', ', $comicData['artists']) : '';
        $comic->writers = is_array($comicData['writers']) ? implode(', ', $comicData['writers']) : '';
        $comic->update();

        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index');
    }
}
