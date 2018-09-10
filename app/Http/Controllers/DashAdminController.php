<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \App\Article::latest('updated_at')->paginate(10);

        return view('dashboard.admin.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = \App\Role::pluck('name', 'id');

        return view('dashboard.admin.createAuthor', compact('roles'));
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

        if ($file = $request->file('photo_id')) {
            $name = time().$file->getClientOriginalName();

            $file->move('images', $name);
            $photo = \App\photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }
        $input['password'] = bcrypt($request->password);
        ///dd($input);
        $user = User::create($input);

        return $this->show();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = \App\User::latest('updated_at')->paginate(10);

        return view('dashboard.admin.authors', compact('users'));
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
        $user = \App\User::findOrFail($id);

        $user->status = ($user->status) ? 0 : 1;

        $user->update(['status' => $user->status]);
        $user->save();

        return redirect()->back();
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
        return $id;
    }
}
