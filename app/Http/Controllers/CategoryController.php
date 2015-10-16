<?php

namespace Autoservicios\Http\Controllers;

use Illuminate\Http\Request;

use Autoservicios\Http\Requests;
use Autoservicios\Http\Requests\CategoryRequest;
use Autoservicios\Http\Controllers\Controller;
use Autoservicios\Entities\Category as Category;
use Illuminate\Support\Str as Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listing()
    {
        $categories = Category::all();
        return response()->json($categories->toArray());
    }

    public function index()
    {
        return view('backend.categories.category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {

        if ($request->ajax()) {
            $cat    = $request['category'];
            $slug   = Str::slug($cat);
            \DB::table('categories')->insert([
                'category'  => $cat,
                'header'    => $request['header'],
                'descrip'   => $request['descrip'],
                'slug'      => $slug,
                'icono'     => $request['ico']    
            ]);

            
            return response()->json([
                'mensaje' => '<strong>Categoría</strong> agregada correctamente.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $cat = Category::find($id);

        return response()->json(
            $cat->toArray()
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $cat = Category::find($id);

        return response()->json(
            $cat->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $namecat = $request['category'];
        $slug    = Str::slug($namecat);
        $cat = Category::find($id);
        $cat->category  = $namecat;
        $cat->header    = $request['header'];
        $cat->descrip   = $request['descrip'];
        $cat->icono     = $request['ico'];
        $cat->slug      = $slug;
        $cat->save();
            
        return response()->json([
            'mensaje' => '<strong>Actualización</strong> realizada correctamente.' 
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {   
        $cat = Category::find($id);
        $cat->delete();

        $messaje = $cat->category . "fue eliminada.";
        if ($request->ajax()) {
            return response()->json($messaje);
        }

    }
}
