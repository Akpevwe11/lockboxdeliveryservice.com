@extends('layouts.app')

@push('css')
@endpush

@section('content')
@if($couriers->isNotEmpty())
    @foreach ($couriers as $courier)
        <div class="post-list">
            <h1 class="text-center"> PARCEL INFORMATION</h1>
            <div class="container">
                    <table class="table table-striped">

                        <tbody>
                        <tr>
                            <th scope="row" class="px-5">TRACKING NUMBER</th>
                            <td>{{ $courier->tracking_no }}</td>


                        </tr>
                        <tr>
                            <th scope="row" class="px-5">SENDER CONTACT</th>
                            <td>{{ $courier->sender_contact }}</td>

                        </tr>
                        <tr>
                            <th scope="row" class="px-5">SENDER ADDRESS</th>
                            <td colspan="2">{{ $courier->sender_address }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">SENDER CITY</th>
                            <td>{{ $courier->sender_city }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">SENDER STATE</th>
                            <td>{{ $courier->sender_state }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">SENDER PIN</th>
                            <td>{{ $courier->sender_pin }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">SENDER COUNTRY</th>
                            <td>{{$courier->sender_country }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT NAME</th>
                            <td>{{ $courier->recipient_name }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT CONTACT</th>
                            <td>{{ $courier->recepient_contact }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT ADDRESS</th>
                            <td>{{ $courier->recepient_address }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT CITY</th>
                            <td>{{ $courier->recipient_city }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT STATE</th>
                            <td>{{ $courier->recipient_state }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT PIN</th>
                            <td>{{ $courier->recepient_pin }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">RECEPIENT COUNTRY</th>
                            <td>{{ $courier->recepient_country }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">COURIER DESCRIPTION</th>
                            <td>{{ $courier->courier_desc }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">WEIGHT</th>
                            <td>{{ $courier->weight }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">LENGTH</th>
                            <td>{{ $courier->length }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">BREADTH</th>
                            <td>{{ $courier->breadth }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">HEIGHT</th>
                            <td>{{ $courier->height }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">CURRENT LOCATION:</th>
                            <td>{{ $courier->from_location }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">TO:</th>
                            <td>{{ $courier->to_location }}</td>
                        </tr>

                        <tr>
                            <th scope="row" class="px-5">STATUS:</th>
                            <td>{{ $courier->status }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="mapouter">
              <div class="gmap_canvas">
                        <iframe class="align-center" width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $courier->from_location }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">put google maps on your website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
                    </div></div>
             </div>

        </div>
    @endforeach

  <div id="map" >

  </div>
@else
    <div class="card">
        <div class="page-wrap d-flex flex-row align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <span class="display-1 d-block text-danger">404!</span>
                        <div class="mb-4 lead">No courier was found with that ID.</div>
                        <a href="/" class="btn btn-link">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endif
@endsection
