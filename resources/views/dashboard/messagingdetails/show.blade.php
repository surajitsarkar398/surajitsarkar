@extends('layouts.dashboard')
@section('content')

    <!-- begin:: Content Head -->
    <div class="kt-portlet kt-portlet--mobile">

        <!-- end:: Content Head -->
        <div class="kt-portlet__body">
            <div class="row">

                <div class="col-sm-3">
                   <table>
                       <tr>
                           <td><label style="font-size: 14px;">Search:</label></td>
                           <td>                    <input type="text" placeholder="" class="form-control">
                           </td>
                       </tr>
                   </table>
                </div>
                <div class="col-sm-6">
                    <span style="color: #2b3b4e">Filter By:</span>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Housing Alloweence</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Housing Alloweence</button>
                    <button class="btn btn-primary btn-sm btn_custom_Style" >Housing Alloweence</button>

                </div>
                <div class="col-sm-3">

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

            </div>
            <!-- end:: Content Head -->
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">
            <table class="table" style="width: 98%;font-size: 9px;">

                <tr style="background-color: #007CC4;color: white;border:1px solid #007CC4;border-top-right-radius: 25px !important;">
                    <td colspan="2" style="border-right: 1px solid #A6D0E9">Employees Information</td>
                    <td colspan="5" style="border-right: 1px solid #A6D0E9">Basic Allowances</td>
                    <td colspan="3" style="border-right: 1px solid #A6D0E9">Additions <span style="font-size: 7px;color: snow">+ New Add</span></td>
                    <td colspan="4" style="border-right: 1px solid #A6D0E9">Deduction <span style="font-size: 7px;color: snow">+ New Add</span></td>

                    <td>Payment Info</td>
                </tr>


                <tbody>
                <tr style="background-color: #DEECF5;color: #64AFDB;font-weight: bold">

                    <td>Job Number</td>
                    <td style="border-right: 2px solid #A6D0E9">Employee's Info</td>
                    <td>Basic</td>
                    <td>Housing Allowance</td>
                    <td>Transportaion Allowance</td>
                    <td>Other <i class="fa fa-bullseye"></i></td>
                    <td style="border-right: 2px solid #A6D0E9">Total</td>
                    <td>Overtime <i class="fa fa-bullseye"></i></td>
                    <td>Other <i class="fa fa-bullseye"></i></td>
                    <td style="border-right: 2px solid #A6D0E9">Total</td>
                    <td>Social Insurance</td>
                    <td>Lanour Violation</td>
                    <td>Financial Advance</td>
                    <td style="border-right: 2px solid #A6D0E9">Total Deduction</td>
                    <td>Net Salary</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

                    <td>1000</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

                    <td>1000</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

                    <td>1000</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

                    <td>1000</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

                    <td>1000</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

                    <td>1000</td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>9999</td>
                    <td ><img style="height: 25px;
    margin-right: 4px;" src="{{asset('assets/media/users/default.jpg')}}"/>Muhammed Ahmed Ahmed</td>

                    <td style="background-color: #E7E7E7">1000</td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></i></td>
                    <td style="background-color: #E7E7E7">1000 </td>
                    <td style="background-color: #E7E7E7" >1000</td>

                    <td style="background-color: #E2FFC7">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #E2FFC7">1000 </td>
                    <td style="background-color: #E2FFC7" >1000</td>

                    <td style="background-color: #FFDCFD">1000 <i style="color: #0a6aa1" class="fa fa-pencil" aria-hidden="true"></td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>
                    <td style="background-color: #FFDCFD">1000</td>

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
