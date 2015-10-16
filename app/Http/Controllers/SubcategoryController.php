<?php

namespace Autoservicios\Http\Controllers;

use Illuminate\Http\Request;

use Autoservicios\Http\Requests;
use Autoservicios\Http\Requests\SubcategoryRequest;
use Autoservicios\Http\Controllers\Controller;
use Autoservicios\Entities\Subcategory as Subcategory;
use Autoservicios\Entities\Category as Category;
use Illuminate\Support\Str as Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function listing()
    {
        $subcat = Subcategory::select('subcategories.*' , 'categories.category' )
                ->join('categories', 'subcategories.category_id', '=', 'categories.id')
                ->orderBy('id', 'asc')
                ->get();
        return response()->json($subcat->toArray());
    }

    public function index()
    {
        $categories = Category::all();
        return view('backend.subcategories.subcategory', compact('categories'));
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
    public function store(SubcategoryRequest $request)
    {   
        
        if ($request->ajax()) {
            $subcat    = $request['title'];
            $slug   = Str::slug($subcat);
            \DB::table('subcategories')->insert([
                'title'         => $subcat,
                'category_id'   => $request['category_id'],
                'descrip_ini'   => $request['descrip-ini'],
                'descrip_foo'   => $request['descrip-foo'],
                'slug'          => $slug,
            ]);

            
            return response()->json([
                'mensaje' => '<strong>Subategoría</strong> agregada correctamente.'
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
        $subcat = Subcategory::find($id);

        return response()->json(
            $subcat->toArray()
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
        $subcat = Subcategory::find($id);

        return response()->json(
            $subcat->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SubcategoryRequest $request, $id)
    {
        if ($request->ajax()) {

            $namesub = $request['title'];
            $slug    = Str::slug($namesub);
            $subcat  = Subcategory::find($id);
            $subcat->title         = $namesub;
            $subcat->category_id   = $request['category_id'];
            $subcat->descrip_ini   = $request['descrip-ini'];
            $subcat->descrip_foo   = $request['descrip-foo'];
            $subcat->slug          = $slug;
            $subcat->save();
                
            return response()->json([
                'mensaje' => '<strong>Actualización</strong> realizada correctamente.' 
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $subcat = Subcategory::find($id);
        $subcat->delete();

        $messaje = $subcat->title . "fue eliminada.";
        if ($request->ajax()) {
            return response()->json( $messaje);
        }

    }

    public function SelectSubcat($id)
    {
        $subcat = Subcategory::select('subcategories.id','subcategories.title')
                ->where('category_id' , '=', $id )
                ->orderBy('id', 'asc')
                ->get();
        return response()->json($subcat->toArray());
    }
}
