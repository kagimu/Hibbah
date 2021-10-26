<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SermonController extends Controller
{
    public function sermons()
    {
        $dats=Sermon::all();
        return view('sermons')->with('dats', $dats);
    }

    public function addSermon()
    {
        return view('sermons.create-sermon');
    }

     public function storesermon(Request $request)
    {
        $title = $request->title;
        $category = $request->category;
        $year = $request->year;
        $file = $request->file;
        $image = $request->file('coverpic');

        if (!$request->has('coverpic')) {
            return response()->json(['message' => 'Missing file'], 422);
        }
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
    
        $dats = new Sermon();
        $dats->title = $title;
        $dats->category = $category;
        $dats->year = $year;
        $dats->file = $file;
        $dats->coverpic = $imageName;
    
        $dats->save();

        return back()->with('Video added', 'Video has been inserted');
    }


    public function allSermons()
    {
        $dats = Sermon::all();
        return view('sermons.all-sermons', compact('dats'));

    }

    public function editSermon($id)
    {
        $dat = Sermon::find($id);
        return view('sermons.edit-sermon', compact('dat'));

    }

    public function updateSermon(Request $request)
    { 
        $dat = Sermon::find($request->id);
        $file =$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('videos',$filename);
        $dat->file=$filename;
        $image = $request->file('coverpic');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $dat->title=$request->title;
        $dat->category=$request->category;
        $dat->year=$request->year;
        $dat->image = $imageName;
        $dat->save();

        return back()->with('Video Updated', 'Video has been Updated');

    }

    public function downloadSermon(Request $request, $file)
    {
        $file=Storage::disk('videos')->get($file);
        return response()->download(public_path('videos/'.$file));
    }

    public function deleteVideo($id)
    {
        $dat = Sermon::find($id);
        unlink(public_path('audios').'/'.$dat->file);
        $dat->delete();
        return back()->with('Sermon deleted', 'Sermon Record has been deleted');

    } 
}
