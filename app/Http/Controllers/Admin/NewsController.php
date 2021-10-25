<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $news = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'image|file|max:1024'
        ]);

        $news['status'] = '0';
        $news['category'] = '1';
        $news['author'] = '1';
        if ($request->file('img')) {
            $news['img'] = $request->file('img')->store('news-img');
        }
        News::create($news);
        return redirect('admin/news/')->with('status', 'Success post news!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            // 'title' => 'edit news',
            'news' => $news,
            "submit" => "Update"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->title);
        $news = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'image|file|max:1024'
        ]);

        $news['status'] = '0';
        $news['category'] = '1';
        $news['author'] = '1';
        if ($request->file('img')) {
            if ($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $news['img'] = $request->file('img')->store('news-img');
        }
        News::where('id', $id)->update($news);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->img) {
            Storage::delete($request->img);
        }
        News::find($id)->delete();
        return back()->with('status', 'Deleted news success');
    }
}
