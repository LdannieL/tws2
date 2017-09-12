<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use NZTim\Mailchimp\Mailchimp;

class MailChimpController extends Controller
{
    public $mailchimp;
    public $listId = '4fd935ef45';
	// public $listId = env('MAILCHIMP_LIST_ID');

    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    public function manageMailChimp()
    {
        return view('mailchimp');
    }

    public function subscribe(Request $request)
    {
    	$this->validate($request, [
	    	'email' => 'required|email',
        ]);

        try {
            if(!$this->mailchimp->check($this->listId, $request->input('email'))) {
                $this->mailchimp->subscribe($this->listId, $request->input('email'), $mergeFields = [], $confirm = false);
                return redirect()->back()->with('success','Email Subscribed successfully');
            } else {
                 return redirect()->back()->with('error','Email is Already Subscribed');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error','Error from MailChimp: ' . $e->getMassage());
        }
    }

    // public function sendCompaign(Request $request)
    // {
    // 	$this->validate($request, [
	   //  	'subject' => 'required',
	   //  	'to_email' => 'required',
	   //  	'from_email' => 'required',
	   //  	'message' => 'required',
    //     ]);

    //     try {
	   //      $options = [
		  //       'list_id'   => $this->listId,
		  //       'subject' => $request->input('subject'),
		  //       'from_name' => $request->input('from_email'),
		  //       'from_email' => 'info@technicalwebservices.co.uk',
		  //       'to_name' => $request->input('to_email')
	   //      ];

	   //      $content = [
		  //       'html' => $request->input('message'),
		  //       'text' => strip_tags($request->input('message'))
	   //      ];

	   //      $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

	   //      $this->mailchimp->campaigns->send($campaign['id']);

    //     	return redirect()->back()->with('success','send campaign successfully');
    //     } catch (Exception $e) {
    //     	return redirect()->back()->with('error','Error from MailChimp: ' . $e);
    //     }
    // }

}
