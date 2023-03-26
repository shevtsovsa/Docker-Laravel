<?php

namespace App\Http\Controllers\arm\doctors;

use App\Models\Doctors;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmDoctorsController extends \App\Http\Controllers\Controller
{
    /**
     * GET
     */
    public function getBlogPage()
    {
        $data['items'] = Doctors::all()->toArray();
        return view('arm.doctors.page', $data);
    }

    /**
     * GET detail
     */
    public function getBlockDetailPage(Request $request)
    {
        $id = $request->input('id');
        $data = [];
        if ($id) {
            $data['item'] = Doctors::find($id)->toArray();
        }
        return view('arm.doctors.detail', $data);
    }

    /**
     * Post detail
     */
    public function postBlockDetail(Request $request)
    {
        $id = $request->input('id_doctor');
        $fields = [];
        foreach (['surname', 'name', 'middle_name', 'position'] as $field_name) {
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
        $fields['body'] = 'test';

        if ($id) {
            DB::table('Doctors')->where('id', $id)->update($fields);
        } else {
            DB::table('Doctors')->insertOrIgnore($fields);
        }

        return redirect('/arm/doctors/');
    }
    /**
     * Post detail
     */
    public function DeleteBlockDetail(Request $request)
    {
        $id = $request->input('id');

        if (!empty($id)){
            DB::table('Doctors')->delete($id);
        }

        return redirect('/arm/doctors/');
    }
}
