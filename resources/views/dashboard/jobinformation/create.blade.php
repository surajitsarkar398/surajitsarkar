@extends('layouts.dashboard')
@push('styles')
    <link href="{{asset('assets/css/pages/wizard/wizard-1' . (app()->isLocale('ar')?'.rtl':'') . '.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h1 class="kt-subheader__title">
                    <i class="kt-menu__link-icon flaticon2-group"></i>&nbsp;{{__('Job Information')}}
                </h1>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>

        </div>
    </div>

    <div class="kt-portlet" style="margin-top: -26px;" >

        <div class="kt-portlet__body kt-portlet__body--fit" style="padding:25px;">

            <div class="row">

                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Job Title')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+HR</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Role')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+HR</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Supervisor</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Joining Date')}} *</label>
                        <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Contract Type')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+FULL TIME</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+PART TIME</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+REMOTELY</button>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Employment Type')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Limited</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Unlimited</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3" id="doctors">
                    <div class="form-group">
                        <label>{{__('Contract Type')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+1 year</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+2 year</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Custom</button>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">

                        </div>
                    </div>

                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3" id="doctors">
                    <div class="form-group">
                        <label>{{__('Probation Period')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+90 Days</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+180 Days</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Custom</button>
                            <input class="form-control" type="range">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 46px;">
                <div class="col-lg-6">
                    <button style="font-size: 16px;width: 142px;color: white;" class="btn btn-primary btn-lg btn_custom_Style">Back</button>
                </div>
                <div class="col-lg-6" style="text-align: right">
                    <button style="font-size: 16px;width: 142px;color: white;background-color: #2b2c2f" class="btn btn-primary btn-lg btn_custom_Style">Next</button>
                    <button style="font-size: 16px;width: 142px;color: white;background-color: #115ca7" class="btn btn-primary btn-lg btn_custom_Style">Save</button>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('js/pages/attendances.js')}}" type="text/javascript"></script>
@endpush
