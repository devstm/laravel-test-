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
                            SELLERS
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <a href="/seller/create">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Add new seller
                        </button>
                    </a>
                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <div class="table-responsive">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{session()->get('message')}}
                                    </div>
                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $index => $val)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->email}}</td>
                                            <td>
                                                <button type="submit" class="bt btn-secondary"><a
                                                        href="/seller/{{$val->id}}/edit">EDIT</a></button>
                                            </td>
                                            <td>
                                                <form action="{{ route('seller.destroy',$val->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>

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
