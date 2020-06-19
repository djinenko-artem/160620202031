@extends('layouts.app')
@section('content')
    <div class="center_box cb">
        <div class="uo_tabs cf">
            <a href="#"><span>profile</a>
            <a href="#"><span>Reviews</span></a>
            <a href="#"><span>orders</span></a>
            <a href="#" class="active"><span>My Address</span></a>
            <a href="#"><span>Settings</span></a>
        </div>
        <div class="page_content bg_gray">
            <div class="uo_header">
                <div class="wrapper cf">
                    <div class="wbox ava">
                        <figure><img src="/storage/imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi"/></figure>
                    </div>
                    <div class="main_info">
                        <h1>
                            {{ Auth::user()->name }}
                        </h1>
                        <div class="midbox">
                            <h4>560 points</h4>
                            <div class="info_nav">
                                <a href="#">Get Free Points</a>
                                <span class="sepor"></span>
                                <a href="#">Win iPad</a>
                            </div>
                        </div>
                        <div class="stat">
                            <div class="item">
                                <div class="num">30</div>
                                <div class="title">total orders</div>
                            </div>
                            <div class="item">
                                <div class="num">14</div>
                                <div class="title">total reviews</div>
                            </div>
                            <div class="item">
                                <div class="num">0</div>
                                <div class="title">total gifts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uo_body">
                <div class="wrapper">
                    <div class="uofb cf">
                        <div class="l_col adrs">

                            @if(session()->get('success'))
                                <div class="col-sm-12">
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br/>
                            @endif
                            <h2>Add New Address</h2>

                            <form action="{{ route('address.create') }}" method="post" id="address_form">
                                {{ csrf_field() }}
                                <div class="field">
                                    <label>Name *</label>
                                    <input type="text" value="" palceholder="" class="vl_empty" required name="name"/>
                                </div>
                                <div class="field">
                                    <label>Your city *</label>
                                    <select class="vl_empty js_cities_select" required>
                                        <option class="plh"></option>
                                        @if(!empty($cities))
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="field">
                                    <label>Your area *</label>
                                    <select class="js_areas_select" required name="area">
                                        <option class="plh"></option>
                                        @if(!empty($areas))
                                            @foreach($areas as $area)
                                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="field">
                                    <label>Street</label>
                                    <input type="text" value="" palceholder="" class="vl_empty" name="street"/>
                                </div>
                                <div class="field">
                                    <label>House # </label>
                                    <input type="text" value="" palceholder="House Name / Number" name="house"/>
                                </div>

                                <div class="field">
                                    <label class="pos_top">Additional information</label>
                                    <textarea name="additional_info"></textarea>
                                </div>

                                <div class="field">
                                    <input type="submit" value="add address" class="green_btn"/>
                                </div>
                            </form>
                        </div>

                        <div class="r_col">
                            <h2>My Addresses</h2>

                            <div class="uo_adr_list">
                                @if(!empty($addresses))
                                    @foreach($addresses as $address)
                                        <div class="item">
                                            <h3>{!! $address->name !!}  </h3>
                                            <p>{!! $address->area->city->name !!}, {!! $address->area->name !!}
                                                , {!! $address->street !!}, {!! $address->additional_info !!} </p>
                                            <div class="actbox">
                                                <a href="javascript:void(0);" class="bcross js_delete_address_btn"
                                                   data-id="{{ $address->id }}"></a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
