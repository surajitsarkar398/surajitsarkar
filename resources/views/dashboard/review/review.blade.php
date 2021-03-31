@extends('layouts.dashboard')
@push('styles')
    <link href="{{asset('assets/css/pages/wizard/wizard-1' . (app()->isLocale('ar')?'.rtl':'') . '.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main" style="width: 100%!important;">
                <h1 class="kt-subheader__title">
                    <i class="kt-menu__link-icon flaticon2-group"></i>&nbsp;{{__('Review')}}
                </h1>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <div class="pull-right">
                    <a><i class="fas fa-edit"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="kt-portlet" style="margin-top: -26px;" >

        <div class="kt-portlet__body kt-portlet__body--fit" style="padding:25px;">

            <div class="row">

                <div class="col-lg-12">
                    <h4 style="color: #22b9ff;font-weight: bold">Personal Information</h4>
                    <table class="table" >

                        <tbody>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Employeers English Name</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Date Of Birth</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Employeers Arabic Name</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Card Number</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">ID Number</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Realise Date</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Nationality</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Expiry Date</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Gender</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Passport Number</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Email</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Expiry Date</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Mobile Number</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce "><strong>Muhhamad Ahamed </strong></td>

                        </tr>

{{--                        <h4 style="color: #22b9ff;font-weight: bold">Department Information</h4>--}}
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Department Name</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce;"><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Section</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Work Shift</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce; "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Branch Name</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
{{--                        <h4 style="color: #22b9ff;font-weight: bold">Job Information</h4>--}}
                        <tr><td style="text-align: left">   <h4 style="color: #22b9ff;font-weight: bold">Job Information</h4></td></tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Job Title</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce; "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Role</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Contract Type</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce ;"><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Employment Type</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>

                     <tr><td style="text-align: left">   <h4 style="color: #22b9ff;font-weight: bold">Compinsation</h4></td></tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Contract Period</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce; "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Probation Period</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Basic</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce; "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Allowences</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">Leave Balances</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce ;"><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Payment Method</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;color: #adc4ce">IBAN</td>
                            <td style="text-align: left;border-right:1px solid #adc4ce; "><strong>Muhhamad Ahamed </strong></td>
                            <td style="text-align: left;color: #adc4ce">Bank Name</td>
                            <td style="text-align: left"><strong>Muhhamad Ahamed </strong></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12">

                    <table class="table table-responsive" >

                        <tbody>



                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12">
                    <table class="table" >

                        <tbody>



                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12">

                    <table class="table" >

                        <tbody>



                        </tbody>
                    </table>
                </div>




            </div>
            <div class="row" style="margin-top: 46px;">

                <div class="col-lg-12" style="text-align: right">
                    <button style="font-size: 16px;width: 142px;color: white;background-color: red" class="btn btn-primary btn-lg btn_custom_Style">Reject</button>
                    <button style="font-size: 16px;width: 142px;color: white;background-color: #115ca7" class="btn btn-primary btn-lg btn_custom_Style">Aprrove</button>

                </div>
            </div>


        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('js/pages/attendances.js')}}" type="text/javascript"></script>
@endpush
