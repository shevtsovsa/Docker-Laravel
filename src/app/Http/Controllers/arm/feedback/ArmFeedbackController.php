<?php

namespace App\Http\Controllers\arm\feedback;

use App\Models\Blog;
use App\Models\Doctors;
use App\Models\DoctorsFeedback;
use App\Models\MainForm;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmFeedbackController extends \App\Http\Controllers\Controller
{
    /**
     * GET
     */
    public function getFeedbackPage()
    {
        $data['items'] = MainForm::all()->toArray();
        return view('arm.feedback.page', $data);
    }

    /**
     * GET detail
     */
    public function getFeedbacketailPage(Request $request)
    {
        $id = $request->input('id');

        $data = [];
        if ($id) {
            $data['item'] = MainForm::find($id)->toArray();
        }
        $service  = Service::find($data['item']['service'])->toArray();
        $data['item']['service'] =  $service['name'];

        $data['doctors'] = Doctors::all()->toArray();
        $doctor_form  = DoctorsFeedback::find(['form_id' => $id])->toArray();
        if (!empty($doctor_form)){
            $doctor =  Doctors::find($doctor_form['0']['id_doctor']);
            if (!empty($doctor)){
                $data['doctor'] = $doctor->toArray();
            }
        }

        return view('arm.feedback.detail', $data);
    }

    /**
     * Post detail
     */
    public function DeleteFeedbackDetail(Request $request)
    {
        $id = $request->input('id');

        if (!empty($id)){
            DB::table('main_question')->delete($id);
        }

        return redirect('/arm/patients-feedback/');
    }
    /**
     * Post detail doctor
     */
    public function postFeedbackDetailDoctor(Request $request)
    {
        $id_doctor = $request->input('doctor_id');
        $form_id = $request->input('form_id');

        if (!empty($id_doctor) && !empty($form_id)){
            DB::table('Doctors_MainForm')->insertOrIgnore(['id_form' => $form_id,'id_doctor' => $id_doctor]);
        }

        return redirect('/arm/patients-feedback/detail?id=' . $form_id);
    }
}
