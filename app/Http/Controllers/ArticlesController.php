<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = \Illuminate\Support\Facades\Auth::user();

        if ($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        $input['user_id'] = $user->id;

        \App\Article::create($input);

        return redirect('authordashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = \App\Article::findOrFail($id);

        $cat = \App\Category::pluck('name', 'id');

        return view('dashboard.author.edit', compact('article', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = \Illuminate\Support\Facades\Auth::user();

        if ($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }
        $input['user_id'] = $user->id;

        \App\Article::whereId($id)->first()->update($input);

        return redirect('/authordashboard/myprofile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        $ar = \App\Article::findOrFail($id);
        // $image_path = app_path("images/news/{$news->photo}");

        if (!$ar->photo_id == null) {
            unlink(public_path().'/'.'images'.'/'.$ar->photo->file);
        }

        $ar->delete();

        return redirect('/authordashboard/myprofile');
    }
}
