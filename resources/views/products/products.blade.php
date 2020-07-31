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
                            Products
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <a href="{{url('product/create ')}}">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Add new product
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
                                        <th scope="col">Quantity</th>
                                        <th scope="col">price</th>
                                        <th scope="col">Price pre unit</th>
                                        <th scope="col">seller</th>
                                        <th scope="col">is active ?</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $index => $val)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->quantity}}</td>
                                            <td>{{$val->price}}</td>
                                            <td>{{$val->price_per_unit}}</td>
                                            <td>{{$val->getSellerName()}}</td>
                                            <td>
                                                <div class="col-3">
														<span class="kt-switch kt-switch--danger">
															<label>
															 <input type="checkbox" data-id="{{ $val->id }}" name="status" class="js-switch " value="" {{ $val->status == 1 ? 'checked' : '' }}>
																<span></span>
															</label>
														</span>
                                                </div>

                                            </td>
                                            <td>
                                                <button type="button" class="bt btn-secondary"><a
                                                        href="/product/{{$val->id}}/edit">EDIT</a></button>

                                            </td>
                                            <td>

                                                <form action="{{ route('product.destroy',$val->id) }}" method="POST">
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
    <script>

        $( document ).ready(function(){
            $('.js-switch').change(function () {
                let status = $(this).prop('checked') === true ? 1 : 0;
                let userId = $(this).data('id');
                $.ajax({
                    method: "GET",
                    url: '{{ url('/changeStatus') }}',
                    data: {status : status , id:userId},
                    success: function (data) {
                        console.log('done');
                    },error:function () {
                        alert('error');
                    }
                });
            });
        });

    </script>

@endsection
