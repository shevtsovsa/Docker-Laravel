<?php

namespace App\Http\Controllers\appointment;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends \App\Http\Controllers\Controller
{
    /**
     * GET
     */
    public function getAppointmentPage()
    {
        $data['service'] = Service::all()->toArray();
        return view('appointment.page', $data);
    }

    /**
     * Post
     */
    public function postAppointmentPage(Request $request)
    {
        $fields = [];
        foreach ([ 'surname', 'name', 'lastname' ,'email' ,'snils' ,'service','disease' ,'phone','date','adress','form_message'] as $field_name) {
            if ($field_value =$request->input($field_name)) {
                $fields[$field_name] = $field_value;
            }else{
                return 'error';
            }
        }

        if (!empty($fields)) {
            DB::table('main_question')->insertOrIgnore($fields);
        }
        return redirect('/appointment/');
    }
}
