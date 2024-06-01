<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {

        if (Auth::id())
        {
            if (Auth::user()->usertype=='user')
            {                  
                return view('dashboard');
            }
            else
            {
                return view('admin.dashboard');
            }
            
        }
        return redirect()->back();
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('dashboard');
        }
        else
        {
            $doctors = Doctor::all();
            return view('welcome', compact('doctors'));
        }
        
    }

    public function dashboard()
    {
        $doctors = Doctor::all();
        return view('dashboard', compact('doctors'));
    }

    

    
    public function appointment(Request $request)
    {
        $data=new appointment;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';

        if (Auth::id()) 
        {
            $data->user_id=Auth::user()->id;
        }
        
        $data->save();

        return redirect()->back()->with('message','Appointment request successful. We\'ll contact you soon!');
        
    }

    public function myappointment()
    {
        if (Auth::id()) 
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();
            return view('my_appointment',compact('appoint'));
            
        }
        else
        {
            return redirect()->back();
        }
        
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
}

