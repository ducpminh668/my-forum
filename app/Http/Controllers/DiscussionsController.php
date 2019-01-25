<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use Session;
use Auth;

class DiscussionsController extends Controller
{
    public function create()
    {
        return view('discuss');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);

        $disscussion = Discussion::create([
            'title' => $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($request->title)
        ]);
        Session::flash('success', 'Discussion succesfully created');
        return redirect()->route('discussion', ['slug' => $disscussion->slug]);

    }

    public function show($slug)
    {
        return view('discussions.show')->with('discussion', Discussion::where('slug', $slug)->first());
    }
}
