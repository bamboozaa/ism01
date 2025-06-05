@extends('layouts.app')
@section('title', 'INTERNATIONAL SCHOOL OF MANAGEMENT ENQUIRY FORM')

@section('importcss')
    @parent

@stop

@section('importjs')
    @parent
    <script type="module">

    </script>

@stop

@section('content')
    <header class="banner">
        <img src="../img/banner_home.png" alt="" class="d-none d-lg-block w-100">
    </header>
    <div class="row">
        <div class="col-12 pt-3">
            <h1 class="text-center" style="color: #00008b;">{{ __('ENQUIRY FORM') }}</h1>
            <p class="text-end">{{ 'Created Date :' . $enquiry['created_at'] }}</p>
        </div>
        <div class="container" id="form-container">
            <div class="col-12 col-md-12 my-3">
                <div class="text-left py-3">
                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="name">{{ __('NAME :') }}</label>
                            <input type="text" id="name" name="name" class="form-control text-info"value="{{ $enquiry['name'] }}" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="nationality">{{ __('NATIONALITY :') }}</span></label>
                            <input type="text" id="nationality" name="nationality" class="form-control text-info"value="{{ $enquiry['nationality'] }}" readonly />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="program_interested">{{ __('PROGRAM INTERESTED :') }}</label>
                            <input type="text" id="program_interested" name="program_interested"value="{{ $enquiry['program_interested'] }}" class="form-control text-info" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="entry_semester">{{ __('ENTRY SEMESTER :') }}</label>
                            <input type="text" id="entry_semester" name="entry_semester"value="{{ $enquiry['entry_semester'] }}" class="form-control text-info" readonly />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="current_education">{{ __('CURRENT EDUCATION STATUS :') }}</label>
                            <input type="text" id="current_education" name="current_education" value="{{ $enquiry['current_education'] }}" class="form-control text-info" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="school_name">{{ __('SCHOOL/UNIVERSITY NAME :') }}</label>
                            <input type="text" name="school_name" value="{{ $enquiry['school_name'] }}" class="form-control text-info" readonly />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="email">{{ __('EMAIL :') }}</label>
                            <input type="text" id="email" name="email" value="{{ $enquiry['email'] }}" class="form-control text-info" readonly />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold" for="phone">{{ __('MOBILE NUMBER :') }}</label>
                            <input type="tel" id="phone" name="phone" value="{{ $enquiry['phone'] }}" class="form-control text-info" readonly />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="fw-bold" for="where_did_you_hear">{{ __('WHERE DID YOU HEAR ABOUT UTCC-ISM? :') }}</label>
                            <input type="text" id="where_did_you_hear" name="where_did_you_hear" value="{{ $enquiry['where_did_you_hear'] }}" class="form-control text-info" readonly />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="fw-bold" for="direct_message">{{ __('DIRECT MESSAGE :') }}</label>
                            <textarea name="direct_message" class="form-control text-info" id="direct_message" rows="3" readonly>{{ $enquiry['direct_message'] }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="javascript:window.close();" class="btn btn-danger">{{ __('Close') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="justify-content-between footer p-2 text-center" style="background-color: #02247d; color: #fff">
        <div class="col-12"> Copyright @ 2020 </div>
    </footer>

@endsection
