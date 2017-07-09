<?php

namespace App\Http\Controllers;
use App\Models\news;
use App\Models\category;
use Validator;
use App\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $News=news::all();
        return view('news.list')->with('news',$News);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category=category::all();
      return view('news.create')->with('category',$category);     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator=validator::make($request->all(),[
         'description'=>'required|max:225',
         'title'=>'required|max:25',
         'author'=>'required|max:25',
       
        ]);
          if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
      $news=$request->all();
      $news=news::create($news);
      $news->save();
  
     return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $news=news::findOrfail($id);
         return view('news.show')->with('news',$news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $category=category::all();
       $news=news::findOrfail($id);
       return view('news.edit')->with('news',$news)->with('category',$category);
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
          $validator=validator::make($request->all(),[
         'description'=>'required|max:225',
         'title'=>'required|max:25',
         'author'=>'required|max:25',
       
        ]);
          if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
     
    $news=news::findOrfail($id);
    $news->fill($request->all());
    $news->save();
  
     return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
