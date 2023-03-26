<?php

namespace App\Http\Controllers\arm\blog;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmBlogController extends \App\Http\Controllers\Controller
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
        return view('arm.blog.page', $data);
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
        return view('arm.blog.detail', $data);
    }

    /**
     * Post detail
     */
    public function postBlockDetail(Request $request)
    {
        $id = $request->input('id_item');
        $name = $request->input('name');
        $prefix = $request->input('prefix');
        $text = $request->input('text');
        $link = $request->input('link');

        $fields = [
            'title' => $name,
            'prefix' => $prefix,
            'body' => $text,
            'image' => $link,
            'created_at' => Carbon::now(),
            'updated_at' => null,
            'password' => '1'
        ];
        if (empty($name) && empty($prefix)) {
            return 'error';
        }

        if ($id) {
            $item = Blog::find($id)->toArray();
            $fields['updated_at'] = Carbon::now();
            $fields['created_at'] = $item['created_at'];
            DB::table('blog_list')->where('id', $id)->update($fields);
        } else {
            DB::table('blog_list')->insertOrIgnore($fields);
        }

        return redirect('/arm/blog/');
    }
    /**
     * Post detail
     */
    public function DeleteBlockDetail(Request $request)
    {
        $id = $request->input('id');

        if (!empty($id)){
            DB::table('blog_list')->delete($id);
        }

        return redirect('/arm/blog/');
    }
}
