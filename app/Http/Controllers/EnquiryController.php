<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Http\Requests\UpdateEnquiryRequest;
use App\Models\Enquiry;
use Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only([
            'index',
            'show',
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = \Adldap\Laravel\Facades\Adldap::search()->users()->first();

        // dd($user);

        $enquiries = Enquiry::orderByRaw('created_at DESC')->paginate(15);
        return view('enquiry.index', compact('enquiries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enquiry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnquiryRequest $request)
    {
        $input = $request->validated();

        $input['phone'] = $input['full_number'];
        unset($input['full_number']);
        // Enquiry::create($request->all());
        // $input['name'] = $request->name;
        // $input['nationality'] = $request->nationality;
        // $input['program_interested'] = $request->program_interested;
        // $input['entry_semester'] = $request->entry_semester;
        // $input['current_education'] = $request->current_education;
        // $input['school_name'] = $request->school_name;
        // $input['email'] = $request->email;
        // $input['phone'] = $request->full_number;
        // $input['direct_message'] = $request->direct_message;
        // $input['where_did_you_hear'] = $request->where_did_you_hear;

        $id = Enquiry::create($input)->enq_id;

        $testMailData = [
            'title' => 'Email From Enquiry Form',
            // 'body' => 'This is the body of test email',
            'name' => $request->name,
            'email' => $request->email,
            'program_interested' => $request->program_interested,
            'message' => $request->direct_message,
            'create_date' => date('Y-m-d H:i:s'),
            'id' => $id,
        ];

        $ip = $request->getClientIp();

        Log::info('Enquiry created with IP ADDRESS: ' . $ip);

        Mail::to($request->email)->send(new SendMail($testMailData));
        // Mail::to('ism@utcc.ac.th')->cc('komsan_aia@utcc.ac.th')->send(new SendMail($testMailData));

        session()->flash('success', 'Enquiry created successfully.');

        return redirect()->route('redirecttoism');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquiry $enquiry)
    {
        return view('enquiry.view', compact('enquiry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnquiryRequest $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();

        session()->flash('success', 'Enquiry deleted successfully.');

        return redirect()->route('enquiries.index');
    }
}
