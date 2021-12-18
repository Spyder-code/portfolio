<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationFitur;
use App\Models\ApplicationLabel;
use App\Models\Category;
use App\Models\Label;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Application::all();
        return view('admin.application.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $label = Label::all();
        return view('admin.application.create', compact('category','label'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($files = $request->file('image')) {
            $img_url = url('/').'/storage/application/';
            $app = Application::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'link' => $request->link,
                'image' => $img_url,
            ]);

            foreach ($request->label as $item) {
                ApplicationLabel::create([
                    'label_id'=> $item,
                    'application_id' => $app->id
                ]);
            };

            foreach ($request->fitur as $item) {
                if($item!=null){
                    ApplicationFitur::create([
                        'name'=> $item,
                        'application_id' => $app->id
                    ]);
                }
            };
            $profileImage = $app->id.'.jpg';
            $path = $files->storeAs('public/application', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            Application::find($app->id)->update(['image'=>$imgUrl]);
            return redirect()->route('app.index')->with('success','Created Success!');
        }else{
            return back()->with('danger','Created Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $app)
    {
        Application::destroy($app->id);
        return back()->with('success','Data berhasil dihapus');
    }
}
