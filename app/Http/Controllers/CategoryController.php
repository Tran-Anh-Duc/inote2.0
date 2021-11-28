<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategpryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.category.list', compact("categories"));
    }

    public function showFormCreate()
    {
        return view('backend.category.create');
    }

    public function store(CreateCategpryRequest $request): \Illuminate\Http\RedirectResponse
    {

        $category = $this->categoryRepository->create($request);
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('backend.category.detail', compact('category'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $category = $this->categoryRepository->getById($id);
        $this->categoryRepository->delete($id);
        return redirect()->route('categories.index');
    }

    public function showFormEdit($id)
    {
        $category = $this->categoryRepository->getById($id);
        return view('backend.category.edit', compact('category'));

    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {

//        $category = $this->categoryRepository->edit($request,$id);
//        return redirect()->route('categories.index');
        $category = Category::query()->findOrFail($id);
        $data = $request->only('name', 'description');
        Category::query()->where('id', '=', $id)->update($data);
        return redirect()->route('categories.index');
    }
}
