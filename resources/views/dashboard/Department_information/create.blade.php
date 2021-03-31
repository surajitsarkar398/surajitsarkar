@extends('layouts.dashboard')
@push('styles')
    <link href="{{asset('assets/css/pages/wizard/wizard-1' . (app()->isLocale('ar')?'.rtl':'') . '.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h1 class="kt-subheader__title">
                    <i class="kt-menu__link-icon flaticon2-group"></i>&nbsp;{{__('Department Information')}}
                </h1>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>

        </div>
    </div>

    <div class="kt-portlet" style="margin-top: -26px;" >

        <div class="kt-portlet__body kt-portlet__body--fit" style="padding:25px;">
            <h5>Name Of Department</h5>
            <div class="row" style="    padding-left: 30px;
    padding-right: 34px;">
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5" style="color: #115ca7">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2" id="hr_col">
                    <div class="hr_block">
                        <div class="hr_content">

                            <input type="checkbox" class="pull-right hr-checked" checked="checked" name="Checkboxes13_1">
                            <br><h5 class="hr-h5">HR Department</h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Section')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary  btn_custom_Style">+Riyadh</button>
                            <button class="btn btn-primary  btn_custom_Style">+Riyadh</button>
                            <button class="btn btn-primary  btn_custom_Style">+Riyadh</button>
                            <button class="btn btn-primary  btn_custom_Style">+Riyadh</button>
                            <button class="btn btn-primary  btn_custom_Style">+Riyadh</button>
                            <button class="btn btn-primary  btn_custom_Style">+Riyadh</button>



                        </div>
                    </div>

                </div>
                <div class="col-lg-6" id="doctors">
                    <div class="form-group">
                        <label>{{__('Work Shift')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn_custom_Style">+Supervisor</button>
                            <button class="btn btn-primary btn_custom_Style">+Supervisor</button>


                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-top: 46px;">
                <div class="col-lg-6">

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
