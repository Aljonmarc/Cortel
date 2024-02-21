<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == '3') {
                $doctor = doctor::all();

                return view('user.home', compact('doctor'));
            } elseif (Auth::user()->usertype == '1') {


                $DoctorCount = doctor::count();
                $PatientCount = appointment::count();

                return view('admin.home', compact('DoctorCount','PatientCount'));
            } else {
                return view('welcome.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function appointment(Request $request)
    {

        $data = new appointment;
        $data->user_id;
        $data->id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment request Successful. We will contact you soon..');
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
}
