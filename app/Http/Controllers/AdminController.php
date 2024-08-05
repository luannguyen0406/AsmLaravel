<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequests;
use App\Http\Requests\Request as RequestsRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function category()
    {
        $category = Category::all();
        return view('admin.layout.category.list', compact('category'));
    }
    public function post()
    {
        $category = Category::all();
        $posts = Post::all();
        return view('admin.layout.post.list', compact('category', 'posts'));
    }

    public function deletePost($id)
    {
        Post::destroy($id);
        return redirect()->route('admin/post')->with('success', 'Post đã được xóa thành công.');
    }

    public function addPostForm()
    {
        $category = Category::all();
        return view('admin.layout.post.create', compact('category'));
    }


    public function AddPost(PostRequests $request)
    {
        $image = [];
        try {

            if ($request->hasFile("posts.image")) {
                $imagePath = Storage::put('posts', $request->file("posts.image"));
                $image[] = $imagePath;
                $request['posts.image'] = $imagePath;
            }

            Post::create([
                'title' => $request->posts['title'],
                'content' => $request->posts['content'],
                'author' => $request->posts['author'],
                'image' => $request['posts.image'],
                'description' => $request->posts['description'],
                'view' => $request->posts['view'],
                'idCategory' => $request->posts['idCategory'],
            ]);

            return redirect()->route('admin/post')->with('success', 'Thao tác thành công!');
        } catch (\Throwable $th) {
            if (Storage::exists($image)) {
                Storage::delete($image);
            }
            return back()->with('error', $th->getMessage());
        }
    }
    public function editPostForm($id)
    {
        $posts = Post::findOrFail($id);
        $category = Category::all();
        return view('admin.layout.post.update', compact('posts', 'category'));
    }

    public function updatePost(PostRequests $request, $id)
    {
        $posts = Post::find($id);
        if (!$posts) {
            return back()->with('error', 'Không tìm thấy bản ghi.');
        }

        $imagePath = null;
        try {
            if ($request->hasFile("posts.image")) {
                if ($posts->image && Storage::exists($posts->image)) {
                    Storage::delete($posts->image);
                }
                $imagePath = Storage::put('posts', $request->file("posts.image"));
            }

            $posts->update([
                'title' => $request->posts['title'],
                'content' => $request->posts['content'],
                'author' => $request->posts['author'],
                'image' => $imagePath ?? $posts->image,
                'description' => $request->posts['description'],
                'view' => $request->posts['view'],
                'idCategory' => $request->posts['idCategory'],
            ]);
            return redirect()->route('admin/post')->with('success', 'Cập nhật thành công!');
        } catch (\Throwable $th) {
            // Xử lý lỗi
            return back()->with('error', $th->getMessage());
        }
    }


    public function addcateForm()
    {
        return view('admin.layout.category.create');
    }

    public function addcate(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('admin/category');
    }

    public function editCateForm($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.layout.category.update', compact('category'));
    }
    public function updateCate(RequestsRequest $request, $id)
    {
        $posts = Category::findOrFail($id);
        if (!$posts) {
            return back()->with('error', 'Không tìm thấy bản ghi.');
        }
        $posts->update([
            'name' => $request->name_cate,
        ]);
        // dd($request);

        return redirect()->route('admin/caegory')->with('success', 'Cập nhật thành công!');
    }
    public function deleteCate($id)
    {
        Category::destroy($id);
        return redirect()->route('admin/category')->with('success', 'Category đã được xóa thành công.');
    }
}
