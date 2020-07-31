@extends('layouts.table')
@section('table')

    <div

        class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                           Currency
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $val)
                                        <tr>
                                            <td>{{$val->id}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->code}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--end::Section-->
                </div>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->
        </div>
    </div>
@endsection




{{--@extends('layouts.table')--}}
{{--@section('table')--}}
{{--<body>--}}
{{--<div class="out">--}}
{{--    <div class="title">--}}
{{--        <h1> INDEX TABLE </h1>--}}
{{--    </div>--}}
{{--    <table class="table">--}}
{{--        <thead class="thead-dark">--}}
{{--        <tr>--}}

{{--            <th scope="col">id</th>--}}
{{--            <th scope="col">name</th>--}}
{{--            <th scope="col">code</th>--}}


{{--        </tr>--}}

{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($data as $val)--}}
{{--            <tr>--}}
{{--                <td>{{$val->id}}</td>--}}
{{--                <td>{{$val->name}}</td>--}}
{{--                <td>{{$val->code}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{--</body>--}}
{{--@endsection--}}
