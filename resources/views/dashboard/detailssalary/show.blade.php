@extends('layouts.dashboard')
@section('content')

    <!-- begin:: Content Head -->
    <div class="kt-portlet kt-portlet--mobile">

        <!-- end:: Content Head -->
        <div class="kt-portlet__body">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="pull-right">
                        <i class="icon-2x text-dark-50 flaticon-reply"></i>
                        <span>Export As:</span>
                        <a style="color: #22b9ff;font-weight: bold">PDF</a>
                        <a style="color: #22b9ff;font-weight: bold">Excell Report</a>
                        <i class="icon-2x text-dark-50 flaticon2-print"></i>
                    </div>
                </div>

            </div>
            <div class="row" style="text-align: center">
                <div style="width: 10%;"></div>
                    <div class="col-lg-3" style="background-color: #DEECF6;color: #0a6aa1;font-weight: bold">
                            <br><h5>Number Of Employees</h5>
                            <h5>7</h5>
                    </div>
                <div style="width: 1%;"></div>
                <div class="col-lg-3" style="text-align: center;background-color: #DEECF6;background-color: #DEECF6;color: #0a6aa1;font-weight: bold">
                    <br><h5>Number Of Employees</h5>
                    <h5>7</h5>
                </div>
                <div style="width: 1%;"></div>
                <div class="col-lg-3" style="text-align: center;background-color: #DEECF6;background-color: #DEECF6;color: #0a6aa1;font-weight: bold">
                    <br><h5>Number Of Employees</h5>
                    <h5>7</h5>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-6" style="color: #22b9ff">
                    &nbsp;&nbsp;&nbsp;<span style="font-weight: bold;font-size: 14px">25 Employees</span>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-lg-6" style="color: #22b9ff">
                    <span style="color: #2b3b4e">Filter By:</span>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Present</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Adsent</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Leave</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Day Off</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Holiday</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style">Not Joint</button>
                </div>
            </div>
            <!-- end:: Content Head -->
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">
            <table class="table" style="width: 98%;font-size: 9px;">
                <thead >
                <tr style="background-color: #007CC4;color: white;border:1px solid #007CC4;border-top-right-radius: 25px !important;">
                    <th>Job Number</th>
                    <th>Employee's Information</th>
                    <th>Basic</th>
                    <th>Housing Allowences</th>
                    <th>Transaction Allowences</th>
                    <th>Gross Salary</th>
                    <th>Social Insurances</th>
                    <th>Recently Joined</th>
                    <th>Total Destruction</th>

                    <th></th>
                    <th></th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td>1000
                    </td>
                    <td>
                        1000
                    </td>
                    <td>1000</td>
                    <td>1000</td>
                    <td>1000</td>
                    <td>1000</td>
                    <td>1000</td>



                </tr>




                </tbody>
            </table>
        </div>
    </div>

    <!-- end:: Content -->
@endsection

@push('scripts')
    <script src="{{asset('js/datatables/absentees.js?<%=ts %>')}}" type="text/javascript"></script>
@endpush
