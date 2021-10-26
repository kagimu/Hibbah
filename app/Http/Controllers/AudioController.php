<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

class AudioController extends Controller
{
    public function audio()
    {
        $audios=Audio::all();
        return view('audios')->with('audios', $audios);
    }

    public function addAudio()
    {
        return view('audios.create-audio');
    }


    public function storeAudio(Request $request)
    {
        $title = $request->title;
        $audio = $request->file('file');
        $audioName = time().'.'.$audio->getClientOriginalExtension();
        $audio->move(public_path('audios'),$audioName);

        $audios = new Audio();
        $audios->title = $title;
        $audios->audio = $audioName;
        $audios->save();
        return back()->with('Audio added', 'Audio has been inserted');
    }

    public function allAudios()
    {
        $audios = Audio::all();
        return view('audios.all-audios', compact('audios'));

    }

    public function editAudio($id)
    {
        $audio = Audio::find($id);
        return view('audios.edit-audio', compact('audio'));

    }

    public function updateAudio(Request $request)
    {
        $title = $request->title;
        $audio = $request->file('file');
        $audioName = time().'.'.$audio->extension();
        $audio->move(public_path('audios'),$audioName);

        $audio = Audio::find($request->id);
        $audio->title = $title;
        $audio->audio = $audioName;
        $audio->save();
        return back()->with('Audio Updated', 'Audio Record has been inserted');

    }

    public function downloadAudio(Request $request, $file)
    {
        return response()->download(public_path('audios/'.$file));
    }

    public function deleteAudio($id)
    {
        $audio = Audio::find($id);
        unlink(public_path('audios').'/'.$audio->audio);
        $audio->delete();
        return back()->with('Audio deleted', 'Audio Record has been deleted');

    } 
}
