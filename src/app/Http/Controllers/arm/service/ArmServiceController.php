<?php

namespace App\Http\Controllers\arm\service;


use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmServiceController extends \App\Http\Controllers\Controller
{

    /**
     * GET
     */
    public function getBlogPage()
    {
        $data['items'] = Service::all()->toArray();
        return view('arm.service.page', $data);
    }

    /**
     * GET detail
     */
    public function getBlockDetailPage(Request $request)
    {
        $id = $request->input('id');
        $data = [];
        if ($id) {
            $data['item'] = Service::find($id)->toArray();
        }
        return view('arm.service.detail', $data);
    }

    /**
     * Post detail
     */
    public function postBlockDetail(Request $request)
    {
        $id = $request->input('id');
        $fields = [];
        foreach ([ 'name', 'price'] as $field_name) {
            if ($field_value =$request->input($field_name)) {
                $fields[$field_name] = $field_value;
            }else{
                return 'error';
            }
        }

        $fields['image'] = null;
        if ($request->input('image')){
            $fields['image'] = $request->input('image');
        }

        if ($id) {
            DB::table('Service')->where('id', $id)->update($fields);
        } else {
            DB::table('Service')->insertOrIgnore($fields);
        }

        return redirect('/arm/service/');
    }

    /**
     * Post detail
     */
    public function DeleteBlockDetail(Request $request)
    {
        $id = $request->input('id');

        if (!empty($id)){
            DB::table('Service')->delete($id);
        }

        return redirect('/arm/service/');
    }
}
