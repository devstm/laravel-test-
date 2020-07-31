@extends('layouts.table')
@section('table')

    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title"> update

                </h3>
            </div>

        </div>

        <form class="kt-form kt-form--label-right" action="/seller/{{ $seller->id }}" method="post">
            {{ csrf_field() }}
            @method('put')

            <div class="kt-portlet__body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">name:</label>
                    <div class="col-10">
                        <input class="form-control" value="{{$seller->name}}" type="text" name="name" placeholder="user name" id="example-text-input">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control" value="{{$seller->email}}" type="email" name="email" placeholder="bootstrap@example.com" id="example-email-input">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>

            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit" name="action" value="submit" class="btn btn-success">Submit</button>
                            <button type="submit" name="action" value="submit with redirect" class="btn btn-success">Submit</button>
                            <a href="/seller"> <button  type="button" class="btn btn-secondary">Cancel</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--end::Portlet-->

@endsection
