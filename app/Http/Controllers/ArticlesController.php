<?php

namespace Autoservicios\Http\Controllers;

use Illuminate\Http\Request;

use Autoservicios\Http\Requests;
use Autoservicios\Http\Controllers\Controller;
use Autoservicios\Entities\Category;
use Autoservicios\Entities\Article;
use Autoservicios\Entities\Subcategory;
use Session;
use Redirect;
use Illuminate\Support\Str as Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $artis = Article::orderBy('id' , 'asc')->paginate(10);
        return view('backend.articles.admin-article', compact('artis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('category','id');
        return view('backend.articles.create-article', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {   
        $art =  $request['title'];
        $slug = Str::slug($art);
        $arti  = new Article;
        $arti->title            =  $art;
        $arti->category_id      =  $request['category_id'];
        $arti->subcategory_id   =  $request['subcategory_id'];
        $arti->developing       =  $request['developing'];
        $arti->video            =  $arti->VideoAttribute($request['video']);
        $arti->slug             =  $slug;
        $arti->save();

        Session::flash('message', 'Articulo '.$art.' agregado Correctamente.');
        return Redirect::route('articles.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {   
        $arti = Article::where('slug' , '=', $slug)->firstOrFail();
        $sup  = Subcategory::all();
        return view('frontend.articulo', compact('arti', 'sup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        $arti =  Article::findOrFail($id);

        if ($request->ajax()) {
            return response()->json(
                $arti->toArray()
            );
        }

        $categories = Category::lists('category','id');
        $subcategories = Subcategory::lists('title','id');
        return view('backend.articles.edit-article', ['arti' => $arti, 'categories' => $categories,'subcategories' => $subcategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $arti = Article::findOrFail($id);

        if (!empty($request['video'])) {
            $oldvideo = $arti->video;
            if (\Storage::disk('local')->exists('video/'. $oldvideo)) {
                \Storage::delete('video/'. $oldvideo);   
            }
        }
        $arti->fill($request->all());
        $arti->save();

        Session::flash('message', 'Articulo editado correctamente!!');
        return Redirect::route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        $mensaje = 'Articulo Eliminado Correctamente!!';
        $arti = Article::findOrFail($id);
        $arti->delete();

        $oldvideo = $arti->video;
        if (\Storage::disk('local')->exists('video/'. $oldvideo)) {
            \Storage::delete('video/'. $oldvideo);   
        }

        if ($request->ajax()) {
            return response()->json($mensaje);
        }

        Session::flash('message', $mensaje);
        return Redirect::route('articles.index');
    }
}
