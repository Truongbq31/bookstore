<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorsRequests;
use App\Models\Admin\Authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function author(){
        $authors = Authors::all();
        return view('content.admin.author.author', compact('authors'));
    }

    public function add(AuthorsRequests $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('image')){
                $params['image'] = uploadFile('images', $request->file('image'));
            }
            $author = Authors::create($params);
            if($author->id){
                Session::flash('success', 'Thêm mới thành công!');
                return redirect()->route('adminAuthor');
            }
        }
        return view('content.admin.author.addAuthor');
    }

    public function edit(AuthorsRequests $request, $id){
        $author = Authors::find($id);
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('image')){
                if(Storage::delete('/images/'.$author->image)){
                    $params['image'] = uploadFile('images', $request->file('image'));
                }
            }
            $result = Authors::where('id', $id)->update($params);
            if($result){
                Session::flash('success', 'Sửa thành công!');
                return redirect()->route('adminAuthor');
            }
        }
        return view('content.admin.author.editAuthor', compact('author'));
    }

    public function remove($id){
        $author = Authors::find($id);
        if($author){
            Storage::delete('/images/'.$author->image);
            Authors::where('id', $id)->delete();
            Session::flash('success', 'Xóa thành công!');
            return redirect()->route('adminAuthor');
        }
    }
    //
}
