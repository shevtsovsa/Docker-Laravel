<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentApiResourse;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    /**
     * GET
     */
    public function getBlogPage()
    {
        $data['items'] = Blog::all()->toArray();
        foreach ($data['items'] as $key=> $item){
            $data['items'][$key]['created_at'] =  Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $item['created_at']);
        }
        return view('blog.page',$data);
    }

    /**
     * GET detail
     */
    public function getBlockDetailPage(Request $request)
    {
        $id = $request->input('id');
        $data = [];
        if ($id) {
            $data['item'] = Blog::find($id)->toArray();
        }
        $data['item']['created_at'] =  Carbon::createFromFormat('Y-m-d\TH:i:s.u\Z', $data['item']['created_at']);
        return view('blog.detail',$data);
    }

}
