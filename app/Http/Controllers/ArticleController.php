<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use \App\Categories;
use Image;
use File;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_article = Article::all();
        return view('article/index',compact('data_article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $categories = Categories::all();
       $article = Article::all();
       return view('/article/create',compact('article','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'release_date' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		$article = Article::create([
			'image' => $nama_file,
            'title' => $request->title,
            'description' => $request->description,
            'release_date' => $request->release_date,
            'tags' => $request->tags,
		]);
        $article->categories()->attach($request->categories);
		return redirect()->to('/article ');
    }
       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::get();
        $article = Article::findOrFail($id);
        return view('article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        if($request->file('image')) 
        {
            $file = $request->file('image');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $upload = 'data_file';
            $file->move($upload,$fileName,$dt);
            $article->image = $fileName;
        }
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->release_date = $request->input('release_date');
        $article->tags = $request->input('tags');
       
        $article->update();
        $article->categories()->attach($request->categories);
        return redirect()->to('/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect ('/article');
    }
}






