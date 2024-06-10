<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Http\Requests\UpdateEnquiryRequest;
use App\Models\Enquiry;
use Mail;
use App\Mail\SendMail;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('enquiry.index');
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
        // Enquiry::create($request->all());
        $input['name'] = $request->name;
        $input['nationality'] = $request->nationality;
        $input['program_interested'] = $request->program_interested;
        $input['entry_semester'] = $request->entry_semester;
        $input['current_education'] = $request->current_education;
        $input['school_name'] = $request->school_name;
        $input['email'] = $request->email;
        $input['phone'] = $request->full_number;
        $input['direct_message'] = $request->direct_message;
        $input['where_did_you_hear'] = $request->where_did_you_hear;

        $testMailData = [
            'title' => 'Email From Enquiry Form',
            'body' => 'This is the body of test email.' . $request->name,
        ];

        Enquiry::create($input);

        Mail::to('komsan_aia@utcc.ac.th')->send(new SendMail($testMailData));

        session()->flash('success', 'Enquiry created successfully.');

        return redirect()->route('enquiries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquiry $enquiry)
    {
        //
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
        //
    }
}
