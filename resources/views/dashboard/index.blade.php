@extends('layouts.dashboard')
@push('styles')
    <style>
        .kt-switch.kt-switch--outline.kt-switch--warning input:checked ~ span:before {
            background-color: #1dc9b7;
        }
        .kt-switch.kt-switch--outline.kt-switch--warning input:checked ~ span:after {
            background-color: #ffffff;
            opacity: 1;
        }
        .kt-switch.kt-switch--icon input:empty ~ span:after {
            content: "\f2be";
        }
        .kt-switch.kt-switch--icon input:checked ~ span:after {
            content: '\f2ad';
        }


        .dot {

        }

    </style>
@endpush

@section('content')
    <!--Begin::Dashboard 6-->

    <!--begin:: Widgets/Stats-->


    <!--end:: Widgets/Stats-->


    <div class="row">
        <div class="col-xl-12">

            <!--begin:: Widgets/Support Requests-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{__('Rate Of Employees In Department')}}
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row" style="text-align: center">

                        <div  style="background-color: #DEECF6;color: #0a6aa1;font-weight: bold;width: 24%">
                            <br><h5>Total Amount</h5>
                            <h5>345000</h5>
                        </div>
                        <div style="width: 1%"></div>

                        <div style="text-align: center;background-color: #DEECF6;background-color: #DEECF6;color: #0a6aa1;font-weight: bold;width: 24%">
                            <br><h5>Number Of Employees</h5>
                            <h5>35</h5>
                        </div>
                        <div style="width: 1%"></div>
                        <div  style="text-align: center;background-color: #DEECF6;background-color: #DEECF6;color: #0a6aa1;font-weight: bold;width: 24%">
                            <br><h5>Number Of Employees</h5>
                            <h5>35</h5>
                        </div>
                        <div style="width: 1%"></div>
                        <div  style="text-align: center;background-color: #DEECF6;background-color: #DEECF6;color: #0a6aa1;font-weight: bold;width: 24%">
                            <br><h5>Number Of Employees</h5>
                            <h5>35</h5>
                        </div>
                    </div>
                </div>

            </div>

            <!--end:: Widgets/Support Requests-->
        </div>
    </div>


    @cannot('view_employees_fordeal')

    @endif

    <div class="row">
        <div class="col-xl-12">

            <!--begin:: Widgets/Support Requests-->
            <div class="kt-portlet kt-portlet--height-fluid">

                <div class="kt-portlet__body">
                    <div class="row" style="text-align: left">

                        <div class="col-md-3"  style="color: #0a6aa1;font-weight: bold;width: 24%">
                            <h4 style="color: #157AD6">Earnings</h4>
                            <span style="color: #C6C6C6">234.354.56 SAR</span>
                            <div class="progress-bar position" data-percent="50" data-duration="1000" data-color="#ccc,#157AD6"></div>
                        </div>

                        <div class="col-md-3" style="color: #0a6aa1;font-weight: bold;width: 24%">
                            <h4 style="color: #E22AA5">Additions</h4>
                            <span style="color: #C6C6C6">234.354.56 SAR</span>
                            <div class="progress-bar position" data-percent="60" data-duration="1000" data-color="#ccc,#E22AA5"></div>
                        </div>

                        <div class="col-md-3"  style="color: #0a6aa1;font-weight: bold;width: 24%">
                            <h4 style="color: #863CF5">Deductions</h4>
                            <span style="color: #C6C6C6">234.354.56 SAR</span>
                            <div class="progress-bar position" data-percent="30" data-duration="1000" data-color="#ccc,#863CF5"></div>
                        </div>
                        <div class="col-md-3"  style="color: #0a6aa1;font-weight: bold;width: 24%">
                            <h4 style="color: #464648">Outsorcing Providers Cost</h4>
                            <span style="color: #C6C6C6">234.354.56 SAR</span>
                            <div class="progress-bar position" data-percent="80" data-duration="1000" data-color="#ccc,#464648"></div>
                        </div>

                    </div>
                </div>

            </div>

            <!--end:: Widgets/Support Requests-->
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">

            <!--begin:: Widgets/Support Requests-->
            <div class="kt-portlet kt-portlet--height-fluid">

                <div class="kt-portlet__body">
                    <div class="row" style="text-align: left">
                        <div class="col-md-3">
                            <h4 style="color: #228DCD">Total</h4>
                            <span style="color: #C6C6C6">234.354.56 SAR</span>
                        </div>
                        <div class="col-md-3">
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="col-md-6" style="text-align: left">
                            <table class="table table-responsive" style="text-align: right;margin-top: 50px;">
                                <h5>Total Amount:234.354.56 SAR</h5>
                                <tr>
                                    <td style="text-align: left;"><span style="  height: 8px; width: 8px;background-color: #FECA37; border-radius: 50%; display: inline-block;"></span> Basic Allowencec</td>
                                    <td style="text-align: left;">234.354.56 SAR</td>
                                    <td style="text-align: left;"><span style="  height: 8px; width: 8px;background-color: #887CFE; border-radius: 50%; display: inline-block;"></span>  Additions</td>
                                    <td style="text-align: left;">234.354.56 SAR</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;"><span style="  height: 8px; width: 8px;background-color: #57D1FF; border-radius: 50%; display: inline-block;"></span> Deductions</td>
                                    <td style="text-align: left;">234.354.56 SAR</td>
                                    <td style="text-align: left;"><span style="  height: 8px; width: 8px;background-color: #C05BFE; border-radius: 50%; display: inline-block;"></span> Leased Fees</td>
                                    <td style="text-align: left;">234.354.56 SAR</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>

            </div>

            <!--end:: Widgets/Support Requests-->
        </div>
    </div>




   @include('layouts.components.back_to_service_modal')

@endsection

@push('scripts')

    <script>
        var url = '/dashboard/ended_employees';

        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {

                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00\"%\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        {y: 79.45, label: "Google"},
                        {y: 7.31, label: "Bing"},
                        {y: 7.06, label: "Baidu"},
                        {y: 4.91, label: "Yahoo"},
                        {y: 1.26, label: "Others"}
                    ]
                }]
            });
            chart.render();
            $(".progress-bar").loading();
        }
    </script>
    <script src="{{asset('js/datatables/attendance_summary.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables/expiring_documents.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/datatables/ended_employees.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('js/datatables/departments_statistics.js?<%=ts %>')}}" type="text/javascript"></script>--}}
    <script src="{{asset('js/components/rate_of_employees_in_departments.js?<%=ts %>')}}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('assets/plugins/custom/flot/flot.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/progress/jQuery-plugin-progressbar.js')}}" type="text/javascript"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


@endpush
