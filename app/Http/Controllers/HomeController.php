<?php

/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
// use Dwij\Laraadmin\Models\Module;
// use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeController

 * @package App\Http\Controllers
 */

use DB;
use Mail;
use Session;
use Module;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return  view('home') . view('footer2');
    }



    public function contact(Request $request)
    {
        //print_r($request->all());die;


        //$data = $this->common();


        $data1 = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'number' => $request->number,
            'message' => $request->message,
        );

        $insert_id = DB::table('contactform1s')->insert($data1);

        $userEmail = 'info@digiprima.com';

        // $userEmail = '10genjobs@gmail.com';

        $contact_id = DB::getPDO()->lastInsertId($insert_id);

        $contact_detail['contactform1s'] = DB::table('contactform1s')->select('contactform1s.*')
            ->where('contactform1s.id', $contact_id)->first();
        //print_r($contact_detail['contactform1s']);die;
        if (env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
            // Send mail to User his new otp
            Mail::send('emails.send_contact_detail', [
                'first_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->number,
                'subject' => $request->subject,
                'message' => $request->message,
                'last_name' => "",
                'apply_for' => "",
                'qualification' => "",
                'city' => "",
            ], function ($m) use ($userEmail) {
                $m->from('info@digiprima.com', 'digiprima.com');
                $m->to($userEmail, 'Admin')->subject('New job inquiry ');
            });
        }
        Session()
            ->flash('message', 'Thanks for contact!!');

        return  view('contact1') . view('footer2');
    }

    public function apply_now(Request $request)
    {
        //  print_r($request->all());die;

        //$data = $this->common();

        // $data2 = array(
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'apply_for' => $request->apply_for,
        //     'city' => $request->city,
        // );
        // $formdata =  Module::insert("Applynows", $request);
        // $formdata = DB::table('applynows')->insert($data2);
        $userEmail = 'info@digiprima.com';
        $customerEmail =$request->email;
        if (env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
            // Send mail to User his new otp
            Mail::send('emails.send_contact_detail', [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'apply_for' => $request->apply_for,
                'qualification' => null,
                'city' => $request->city
            ], function ($m) use ($userEmail) {
                $m->from('info@digiprima.com', 'digiprima.com');
                $m->to($userEmail, 'apply job')->subject('New job inquiry ');
            });
        }
       
// user send mail in apply now page
if (env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
    // Send mail to User his new otp
    Mail::send('emails.send_meeting_request_users_apply', [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'apply_for' => $request->apply_for,
        'qualification' => null,
        'city' => $request->city
    ], function ($m) use ($customerEmail) {
        $m->from('info@digiprima.com', 'digiprima.com');
        $m->to($customerEmail, 'apply job')->subject('Job Inquiry ');
    });
}
Session()
    ->flash('message', 'Thanks We will revert back soon.');

return redirect('/home');
}



    public function meetings(Request $request)
    {
        //print_r($request->all());die;

        //$data = $this->common();

        $data3 = array(
            'name' => $request->name,
            'email' => $request->email,
            'message'=>'Welcome to digiprima technology'
        );
        $meeting = DB::table('meetinghomes')->insert($data3);
        $userEmail = 'info@digiprima.com';
        $customerEmail =$request->email;
        if (env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
            // Send mail to User his new otp
            Mail::send('emails.send_meeting_request', [
                'name' => $request->name,
                'email' => $request->email,
                'newMessage'=> 'Welcome to digiprima technology'
            ], function ($m) use ($userEmail) {
                $m->from('info@digiprima.com', 'digiprima.com');
                $m->to($userEmail, 'request meeting')->subject('Meeting Requested ');
            });
            
        }


// user send mail

if (env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
    // Send mail to User his new otp
    Mail::send('emails.send_meeting_request_users', [
        'name' => $request->name,
        'email' => $request->email,
        'newMessage'=> 'Welcome to digiprima technology'
    ], function ($m) use ($customerEmail) {
        $m->from('info@digiprima.com', 'digiprima.com');
        $m->to($customerEmail, 'request meeting')->subject('Meeting Request ');
    });
    
}

        Session()
            ->flash('message', 'Meeting requested successfully!!');

        return redirect('/home');
    }

    public function requestMeetings(Request $request)
    {
        //print_r($request->all());die;

        //$data = $this->common();

        $data4 = array(
            'name' => $request->name,
            'email' => $request->email
            // 'message' => $request->message,
        );
        $messages ="welcome to digiprima";
        $requestMmeeting = DB::table('meetings')->insert($data4);
        $customerEmail = $request->email;
        $userEmail = 'info@digiprima.com';
        if (env('MAIL_USERNAME') != null && env('MAIL_USERNAME') != "null" && env('MAIL_USERNAME') != "") {
            // Send mail to User his new otp
            Mail::send('emails.send_meeting_request', [
                'name' => $request->name,
                'email' => $request->email,
                // 'newMessage' => $request->message
                'newMessage' =>$messages
            ], function ($m) use ($userEmail) {
                $m->from('info@digiprima.com', 'digiprima.com');
                $m->to([$userEmail,$customerEmail], 'request meeting')->subject('Meeting Requested ');
                
            });
        }

        
        Session()
            ->flash('message', 'Meeting requested successfully!!');

        return redirect('/home');
    }
}
