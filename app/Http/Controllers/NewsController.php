<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news=News::all();
        return view('news')->with('news', $news);
    }
    
    public function addNews()
    {
        return view('news.create-news');
    }

    public function storeNews(Request $request)
    {
        $title = $request->title;
        $date = $request->date;
        $categories = $request->categories;
        $status = $request->status;
        $country = $request->country;
        $newstag = $request->newstag;
        $body = $request->body;
        $bodyimage1 = $request->file('file');
        $image1 = time().'.'.$bodyimage1->extension();
        $bodyimage1->move(public_path('images'),$image1);

        $bodyimage2 = $request->file('file');
        $image2 = time().'.'.$bodyimage2->extension();
        $bodyimage2->move(public_path('images'),$image2);

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $news = new News();
        $news->title = $title;
        $news->body = $body;
        $news->date = $date;
        $news->newstag = $newstag;
        $news->categories = $categories;
        $news->status = $status;
        $news->country = $country;
        $news->profileimage = $imageName;
        $news->bodyimage1 = $bodyimage1;
        $news->bodyimage2 = $bodyimage2;
        $news->save();
        return back()->with('News added', 'News Record has been inserted');
    }

    public function allNews()
    {
        $news = News::all();
        return view('news.all-news', compact('news'));

    }

    public function dashboard()
    {
        $news = News::all();
        return view('dash')->with('news',$news);

    }

    public function editNews($id)
    {
        $new = News::find($id);
        return view('news.edit-news', compact('new'));

    }

    public function updateNews(Request $request)
    {
        $title = $request->title;
        $date = $request->date;
        $categories = $request->categories;
        $status = $request->status;
        $country = $request->country;
        $newstag = $request->newstag;
        $body = $request->body;
        $bodyimage1 = $request->file('file');
        $image1 = time().'.'.$bodyimage1->extension();
        $bodyimage1->move(public_path('images'),$image1);

        $bodyimage2 = $request->file('file');
        $image2 = time().'.'.$bodyimage2->extension();
        $bodyimage2->move(public_path('images'),$image2);

        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $new = News::find($request->id);
        $new->title = $title;
        $new->body = $body;
        $new->date = $date;
        $new->newstag = $newstag;
        $new->categories = $categories;
        $new->status = $status;
        $new->country = $country;
        $new->profileimage = $imageName;
        $new->bodyimage1 = $bodyimage1;
        $new->bodyimage2 = $bodyimage2;
        $new->save();
        return back()->with('News Updated', 'News Record has been Updated');

    }

    public function deleteNews($id)
    {
        $new = News::find($id);
        unlink(public_path('images').'/'.$new->profileimage);
        $new->delete();
        return back()->with('News deleted', 'News Record has been deleted');

    }    
}

