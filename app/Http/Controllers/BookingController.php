<?php

namespace App\Http\Controllers;

use App\SiteSettings;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking_confirmation (Request $request)
    {

        Booking::create([
            'user_id' => Auth::id(),
           'topicsFor_booking' => $request->topicsFor_booking,
           'student1_name' => $request->student1_name,
           'student2_name' => $request->student2_name,
           'student3_name' => $request->student3_name,
           'student1_email' => $request->student1_email,
           'student2_email' => $request->student2_email,
           'student3_email' => $request->student3_email,
           'student1_phone' => $request->student1_phone,
           'student2_phone' => $request->student2_phone,
           'student3_phone' => $request->student3_phone,
           'student1_batch' => $request->student1_batch,
           'student2_batch' => $request->student2_batch,
           'student3_batch' => $request->student3_batch,
           'group_name' => $request->group_name,
           'booking_dateTime' => $request->booking_dateTime,
            'teacher_id' => $request->teacher_id,
        ]);
        $settings = SiteSettings::find(1);

        return view('frontend.booking_status', compact('settings'));
    }

//    public function booking_confirm (Request $request)
//    {
//        $bookings = new Booking();
//        $request->user_id => Auth::id();
//
//    }
    public function showbooking ()
    {
        $bookings = Booking::where('user_id', Auth::id())->get();
        $settings = SiteSettings::find(1);

        return view('backend.multi-dashboard.user._home_user', compact('bookings', 'settings'));
    }

    public function statusChangeForBooking ($id)
    {
        $data = [];
        $data['bookings'] = Booking::find($id);
        return view('backend.booking.change_status', $data);
    }

    public function bookingStatusStore (Request $request)
    {
        // Validation Will Here
        $bookings = Booking::findOrfail($request->id)->update([
            'status' => $request->status
        ]);

        session()->flash('success', 'Successfully Updated!');
        return redirect(route('admin.dashboard'));
    }

    public function delete ($id)
    {
        $data = [];
        $data['bookings'] = Booking::find($id);
        $data['bookings']->delete();
        session()->flash('success', 'Teacher Appointment Booking Deleted Successfully!');
        return redirect(route('admin.dashboard'));
    }

    public function submit_info ($id)
    {
        $data = [ ];
       // $data['bookings'] = Booking::find($id);
        $data['settings'] = SiteSettings::find(1);
        $data['id'] = $id;
        return view('frontend.booking_submit' , $data);
    }
}
