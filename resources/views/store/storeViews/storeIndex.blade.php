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
                            Stores
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <a href="/create">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Add new seller
                        </button>
                    </a>
                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <div class="table-responsive">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">currency_id</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $index => $val)
                                        <tr>
                                            <td>{{$index=1}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->email}}</td>
                                            <td>{{$val->get_currency_code()}}</td>
                                            <td> <button type="button" class="bt btn-secondary"><a href="/ed/{{$val->id}}">EDIT</a></button></td>
                                            <td> <button type="button" class="bt btn-secondary"><a href="/de/{{$val->id}}">DELETE</a></button></td>
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
