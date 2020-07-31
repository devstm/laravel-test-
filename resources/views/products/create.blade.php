@extends('layouts.table')
@section('table')
    <!--begin::Portlet-->
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Add new product
                </h3>
            </div>
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <form class="kt-form kt-form--label-right" action="{{url('/api/product')}}" method="post">
            {{ csrf_field() }}
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">name:</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="name" placeholder="user name" id="example-text-input">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">quantity</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="quantity" placeholder="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">price</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="price" placeholder="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">price_per_unit</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="price_per_unit" placeholder="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">seller_id</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="seller_id" placeholder="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{url('product')}}"> <button  type="button" class="btn btn-secondary">Cancel</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
