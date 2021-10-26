<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function artists()
    {
        $artists=Artist::all();
        return view('artists')->with('artists', $artists);
    }

    public function dashboard()
    {
        $singers=Artist::all();
        return view('dashboard')->with('singers', $singers);
    }

    public function addArtist()
    {
        return view('artists.create-artist');
    } 


    public function storeartist(Request $request)
    {
        $real_name = $request->real_name;
        $stage_name = $request->stage_name;
        $gender = $request->gender;
        $Country = $request->Country;
        $District = $request->District;
        $Search_tags = $request->Search_tags;
        $Biography = $request->Biography;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $artists = new Artist();
        $artists->real_name = $real_name;
        $artists->gender = $gender;
        $artists->stage_name = $stage_name;
        $artists->Country = $Country;
        $artists->District = $District;
        $artists->Search_tags = $Search_tags;
        $artists->Biography = $Biography;
        $artists->image = $imageName;
        $artists->save();
        return back()->with('Artist added', 'Artist Records has been inserted');
    }

    public function allArtists()
    {
        $artists = Artist::all();
        return view('artists.all-artists', compact('artists'));

    }

    public function editNews($id)
    {
        $artist = Artist::find($id);
        return view('artists.edit-artist', compact('artist'));

    }

    public function updateArtist(Request $request)
    {
        $real_name = $request->real_name;
        $stage_name = $request->stage_name;
        $gender = $request->gender;
        $Country = $request->Country;
        $District = $request->District;
        $Search_tags = $request->Search_tags;
        $Biography = $request->Biography;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $artist = Artist::find($request->id);
        $artist->real_name = $real_name;
        $artist->gender = $gender;
        $artist->stage_name = $stage_name;
        $artist->Country = $Country;
        $artist->District = $District;
        $artist->Search_tags = $Search_tags;
        $artist->Biography = $Biography;
        $artist->image = $imageName;
        $artist->save();
        return back()->with('Artist Updated', 'Artist Record has been inserted');

    }

    public function deleteArtist($id)
    {
        $artist = Artist::find($id);
        unlink(public_path('images').'/'.$artist->image);
        $artist->delete();
        return back()->with('Artist deleted', 'Artist Record has been deleted');

    }  
}
