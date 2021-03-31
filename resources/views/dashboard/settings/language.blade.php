@extends('layouts.dashboard')

@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    {{__('Settings')}}
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="#" class="">
                </a>
                <a href="{{route('dashboard.index')}}" class="btn btn-secondary">
                    {{__('Back')}}
                </a>
            </div>
        </div>
    </div>
    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>

        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

            <!--begin:: Widgets/Applications/User/Profile4-->
            <div class="kt-portlet kt-portlet--height-fluid-">
                <div class="kt-portlet__body">

                    <!--begin::Widget -->
                    <div class="kt-widget kt-widget--user-profile-4">
                        <div class="kt-widget__head">
                            <div class="kt-widget__content">
                                <div class="kt-widget__section">
                                    <a href="#" class="kt-widget__username">
                                        {{__('Language')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <a href="{{route('dashboard.settings.payrolls')}}" class="kt-widget__item">
                                {{__('Payrolls')}}
                            </a>
                        </div>
                    </div>

                    <!--end::Widget -->
                </div>
            </div>

            <!--end:: Widgets/Applications/User/Profile4-->

        </div>

        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">{{__('Attendance Settings')}}</h3>
                            </div>
                        </div>
                        @include('layouts.dashboard.parts.errorSection')
                        <form class="kt-form kt-form--label-right" action="{{route('dashboard.settings.attendance')}}" method="post">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        @if(session('success'))
                                            @include('layouts.dashboard.parts.successSection')
                                        @endif
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">{{__('Work Start Date')}}</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control start_time @error('work_start_date') is-invalid @enderror"
                                                       readonly placeholder="Select time" type="text"
                                                       name="work_start_date"
                                                       value="{{ old('work_start_date') ?? setting('work_start_date')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" class="btn btn-success">{{__('confirm')}}</button>&nbsp;
                                            <a href="{{route('dashboard.index')}}" class="btn btn-secondary">{{__('back')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End:: App Content-->
    </div>

    <!--End::App-->





    <!--end::Portlet-->
@endsection

@push('scripts')
<script>
    $(function (){
        $('.start_time').timepicker({
            defaultTime: '9:30:00 AM',
            minuteStep: 1,
            showSeconds: false,
            showMeridian: true,
        });
        $('.end_time').timepicker({
            defaultTime: '6:30:00 AM',
            minuteStep: 1,
            showSeconds: false,
            showMeridian: true,
        });
        $('.overtime').timepicker({
            minuteStep: 1,
            defaultTime: '0:00:00',
            showSeconds: false,
            showMeridian: false,
            snapToStep: true
        });
    });
</script>
@endpush