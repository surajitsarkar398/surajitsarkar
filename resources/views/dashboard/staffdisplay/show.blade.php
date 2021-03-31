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
                    <th>Employee's Name</th>
                    <th>Job Title</th>
                    <th>Department</th>
                    <th>Location</th>
                    <th>Joining Date</th>
                    <th>ID/Iqama Number</th>

                    <th></th>
                    <th></th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td><input style="box-sizing: border-box;" type="checkbox" name="Checkboxes3_1"></td>
                    <td>1</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td>HR Manager
                    </td>
                    <td>
                        HR Manager
                    </td>
                    <td>Riyadh</td>
                    <td>22/12/2018</td>
                    <td>12345678</td>
                    <td><i style="font-size: 17px;color: #0a6aa1" class="fa fa-ellipsis-v" aria-hidden="true"></i></td>



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
