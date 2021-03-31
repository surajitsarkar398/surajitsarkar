@extends('layouts.dashboard')
@section('content')

    <!-- begin:: Content Head -->
    <div class="kt-portlet kt-portlet--mobile">

        <!-- end:: Content Head -->
        <div class="kt-portlet__body">
            <div class="row">

                <div class="btn-group">
                    <button class="daily">Daily View</button>
                    <button class="monthly">Monthly View</button>
                </div>
                <div style="margin-left: 62px;">
                    <button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:#cda6a6;color: red">Adsent</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:#83afdd;color: blue">Leave</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:#ead2a6;color: #9c7e46">Day Off</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:#cbb1e3;color: #793484">Holiday</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:#f2c1bf;color: #ff0404">Not Joint</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style">Punch Forget</button>
                </div>
                <div style="margin-left: 29px;margin-top: 2px;">

                    <i class="icon-2x text-dark-50 flaticon-reply"></i>
                    <span>Export As:</span>
                    <a style="color: #22b9ff;font-weight: bold">PDF</a>
                    <a style="color: #22b9ff;font-weight: bold">Excell Report</a>
                    <i class="icon-2x text-dark-50 flaticon2-print"></i>
                </div>

            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-6" style="color: #22b9ff">
                    <i style="font-size: 8px;"  class="icon-2x text-dark-50 flaticon2-left-arrow"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: bold;font-size: 14px">Thursday 21,February</span>&nbsp;&nbsp;&nbsp;&nbsp;<i style="font-size: 8px;" class="icon-2x text-dark-50 flaticon2-right-arrow"></i>
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
                    <th>Employees</th>
                    <th>Status</th>
                    <th>Shift</th>
                    <th>Check In</th>
                    <th>Check out</th>
                    <th>Working Hours</th>
                    <th>Late Arrival</th>
                    <th>Early Departure</th>
                    <th>Overtime</th>
                    <th>Approved Overtime</th>
                    <th></th>
                </tr>

                </thead>
                <tbody>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


                </tr>
                <tr>

                    <td>9999</td>
                    <td><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>
                    <td><button class="btn btn-primary btn-sm btn_custom_Style" style="background-color:lightgreen;color: darkgreen">Present</button>
                    </td>
                    <td>
                        8:00 AM TO 9:00 PM
                    </td>
                    <td>7:51 AM</td>
                    <td>7:51 AM</td>
                    <td>7:51 </td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>Late Arrival 00:00<br>Excueed Late Arrival 00:00</td>
                    <td>00:00<i class="icon-xl la la-pencil-alt"></i></td>
                    <td>00:00</td>


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
