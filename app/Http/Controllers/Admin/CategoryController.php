<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( request()->ajax()) {
            $query = Category::query();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mbr-1"
                            type="button" data-toggle="dropdown">Aksi</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="' . route('categories.edit', $item->id) . '">Edit</a>
                                <form action="' . route('categories.destroy', $item->id) .'" method="POST">
                                    '. method_field('delete') . csrf_field() .'
                                    <button type="submit" class="dropdown-item text-border-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    ';
                })
                ->editColumn('icon', function($item) {
                    return $item->icon ? '<img src="'. Storage::url($item->icon) .'" style="max-height:40px;"  />' : '';
                })
                ->rawColumns(['action', 'icon'])
                ->make();
        }
        return view('pages.admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['icon'] = $request->file('icon')->store('assets/category', 'public');

        Category::create($data);

        return redirect()->route('categories.index');
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
        $item = Category::findOrFail($id);

        return view('pages.admin.categories.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        if (!empty($data['icon'])) {
            $data['icon'] = $request->file('icon')->store('assets/category', 'public');
        }



        $item = Category::findOrFail($id);
        $item->update($data);

        return redirect()->route('categories.index');
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
