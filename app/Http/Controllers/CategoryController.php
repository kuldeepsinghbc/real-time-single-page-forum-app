<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        return CategoryResource::collection(category::latest()->get());
    }
    public function store(Request $request)
    {
        // Category::create($request->all());
        $category = new Category;
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return response(new CategoryResource($category),Response::HTTP_ACCEPTED);
        // return response('created',201);
     }

    public function show(Category $category)
    {
        return new CategoryResource ($category);
    }

    public function update(Request $request, Category $category)
    {
        $category->update(
            [
                'name'=>$request->name,
                'slug'=>str_slug($request->name)
            ]
        );
        return response(new CategoryResource($category) ,Response::HTTP_ACCEPTED);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
