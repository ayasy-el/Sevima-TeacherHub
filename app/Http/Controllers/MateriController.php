<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function create(Request $request, Materi $mtr)
    {
        $request->validate([
            'title' => ['required', 'unique:materis,title'],
            'content' => ['required'],
        ]);
        $mtr->title = $request['title'];
        $mtr->content = $request['content'];
        $mtr->save();
        return redirect('/kelola-pembelajaran');
    }

    public function edit(Request $request, $id)
    {
        $input = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
        ]);

        Materi::find($id)->update($input);
        return redirect('/kelola-pembelajaran');
    }
    public function delete($id)
    {
        Materi::find($id)->delete();
        return redirect('/kelola-pembelajaran');
    }
}
