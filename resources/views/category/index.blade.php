@extends('layouts.admin')

@section('page-title')
    {{__('Orders')}}
@endsection

@section('breadcrumb')
{{--    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>--}}
    <li class="breadcrumb-item"><a href="">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item">{{__('Order')}}</li>
@endsection


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th>{{__('Order Id')}}</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Plan Name')}}</th>
                                <th>{{__('Price')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Payment Type')}}</th>
                                <th>{{__('Date')}}</th>
                                <th>{{__('Coupon')}}</th>
                                <th>{{__('Invoice')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($nftcategories as $nftcategory)
                                <tr>
                                    <td>{{$nftcategory->order_id}}</td>
                                    <td>{{$nftcategory->user_name}}</td>
                                    <td>{{$nftcategory->plan_name}}</td>
                                    <td>{{env('CURRENCY_SYMBOL')}}{{number_format($nftcategory->price)}}</td>
                                    <td>
                                        @if($nftcategory->payment_status == 'succeeded')
                                            <span class="status_badge badge bg-primary p-2 px-3 rounded">{{ucfirst($nftcategory->payment_status)}}</span>
                                        @else
                                            <span class="status_badge badge bg-danger p-2 px-3 rounded">{{ucfirst($nftcategory->payment_status)}}</span>
                                        @endif
                                    </td>
                                    <td>{{$nftcategory->payment_type}}</td>
                                    <td>{{$nftcategory->created_at->format('d M Y')}}</td>
                                    <td>{{!empty($nftcategory->use_coupon)?$nftcategory->use_coupon->coupon_detail->name:'-'}}</td>
                                    <td class="Id">
                                        @if(empty($nftcategory->receipt))
                                            <p>{{__('Manually plan upgraded by Super Admin')}}</p>
                                        @elseif($nftcategory->receipt =='free coupon')
                                            <p>{{__('Used 100 % discount coupon code.')}}</p>
                                        @else
                                            <a href="{{$nftcategory->receipt}}" target="_blank"><i class="ti ti-file-invoice"></i> {{__('Invoice')}}</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
