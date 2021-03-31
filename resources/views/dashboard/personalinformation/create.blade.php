@extends('layouts.dashboard')
@push('styles')
    <link href="{{asset('assets/css/pages/wizard/wizard-1' . (app()->isLocale('ar')?'.rtl':'') . '.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h1 class="kt-subheader__title">
                    <i class="kt-menu__link-icon flaticon2-group"></i>&nbsp;{{__('Personal Information')}}
                </h1>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>

        </div>
    </div>

    <div class="kt-portlet" style="margin-top: -26px;" >

        <div class="kt-portlet__body kt-portlet__body--fit" style="padding:25px;">

            <div class="row">
                <div class="row">
                    <div class="col-lg-4" id="doctors">
                        <div class="form-group">
                            <label>{{__("Employess's English Name")}} *</label>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4" id="doctors">
                        <div class="form-group">
                            <label>{{__("Employess's Arabic Name")}} *</label>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4" id="doctors">
                        <div class="form-group">
                            <label>{{__("ID Number/Iqama Number")}} *</label>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4" id="doctors">
                        <div class="form-group">
                            <label>{{__("Mobile Number")}} *</label>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4" id="doctors">
                        <div class="form-group">
                            <label>{{__("Email")}} *</label>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                        </div>
                    </div>
                    <div class="col-lg-4" id="doctors">
                        <div class="form-group">
                            <label>{{__("Date Of Birth")}} *</label>
                            <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                        </div>
                    </div>

                </div>
                <div class="col-lg-12" id="doctors">
                    <div class="form-group">
                        <label>{{__('Job Title')}} *</label>
                        <div style="margin-top: 11px;">
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Saudi Arabian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <button class="btn btn-primary btn-sm btn_custom_Style">+Egyptian</button>
                            <a style="color: #22b9ff;text-decoration: underline;font-weight: bold">See More</a>

                        </div>
                    </div>

                </div>




            </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="accordion accordion-light  accordion-toggle-arrow" id="accordionExample5">
                    <div class="card">
                        <div class="card-header" id="headingOne5">
                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne5">
                                <h4>Optional Information</h4>
                            </div>
                        </div>
                        <div id="collapseOne5" class="collapse show" data-parent="#accordionExample5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-lg-4" id="doctors">
                                            <div class="form-group">
                                                <label>{{__("Card Number")}} *</label>
                                                <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="doctors">
                                            <div class="form-group">
                                                <label>{{__("Release Date")}} *</label>
                                                <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="doctors">
                                            <div class="form-group">
                                                <label>{{__("Expiry Date")}} *</label>
                                                <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="doctors">
                                            <div class="form-group">
                                                <label>{{__("Passport Number")}} *</label>
                                                <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4" id="doctors">
                                            <div class="form-group">
                                                <label>{{__("Expiry Date")}} *</label>
                                                <input name="barcode" autofocus id="example-date-input"  class="form-control custom_style_input" type="text">
                                            </div>
                                        </div>

                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                </div>
            </div>
            <div class="row" style="margin-top: 46px;">

                <div class="col-lg-12" style="text-align: right">
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
