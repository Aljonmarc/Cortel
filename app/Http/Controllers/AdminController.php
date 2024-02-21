<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\appointment;

class AdminController extends Controller
{
    public function viewDoctor()
    {
        $data = doctor::all();

        return view('doctors.Doctor', compact('data'));
    }

    public function addDoctor()
    {

        return view('doctors.addDoctor');
    }

    public function saveDoctor(Request $request)
    {
       
            $doctor = new doctor;

            $image = $request->file;

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('doctorimage', $imagename);

            $doctor->image = $imagename;
          
            $doctor->name = $request->name;
            $doctor->phone = $request->phone;
            $doctor->address = $request->address;
            $doctor->room = $request->room;
            $doctor->speciality = $request->speciality;

            $doctor->save();

            return redirect()->back()->with('message', 'Added Successfully');
        
    }


    public function updateDoctor($id)

    {

        $data = doctor::find($id);
        return view('doctors.updateDoctor', compact('data'));
    }

    public function editDoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $image = $request->file;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('doctorimage', $imagename);

            $doctor->image = $imagename;
        }

        $doctor->save();

        return redirect()->back()->with('message', 'Updated Successfully');
    }

    public function deleteDoctor($id)
    {
        $data = doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function showappointment()
    {

        $data = appointment::all();

        return view('showappointment.showappointment', compact('data'));
    }


    public function approved($id)
    {
        $data = appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = appointment::find($id);

        $data->status = 'Canceled';

        $data->save();

        return redirect()->back();
    }

    public function showdoctor()

    {

        $data = doctor::all();

        return view('doctors.showdoctor', compact('data'));
    }



}
