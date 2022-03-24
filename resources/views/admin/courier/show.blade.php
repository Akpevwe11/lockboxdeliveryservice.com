@extends('admin.layouts.inc.master')

@section('title', 'Details for' . ''. $courier->recipient_name)

@push('css')
@endpush

@section('content')

<div class="col-12">
@include('admin.alert')
</div>

<div class="col-md-12">


    <div class="card card-primary card-outline">

        <p class="p-3"><strong>Tracking Number:</strong>{{ $courier->tracking_no }}</p>
        <p class="p-3"><strong>Sender Contact:</strong>{{ $courier->sender_contact }}</p>
        <p class="p-3"><strong>Sender City:</strong>{{ $courier->sender_city }}</p>
        <p class="p-3"><strong>Sender State:</strong>{{ $courier->sender_state }}</p>
        <p class="p-3"><strong>Sender Pin:</strong>{{ $courier->sender_pin }}</p>
        <p class="p-3"><strong>Sender Country:</strong>{{ $courier->sender_country }}</p>
        <p class="p-3"><strong>Sender Name:</strong>{{ $courier->sender_name }}</p>






        {{-- 'sender_contact' => 'required',
        'sender_address' => 'required',
        'sender_city' => 'required',
        'sender_state' => 'required',
        'sender_pin' => 'required',
        'sender_country' => 'required',
        'recipient_name'  => 'required',
        'recepient_contact' => 'required',
        'recepient_address'  => 'required',
        'recipient_city'  => 'required',
        'recipient_state'  => 'required',
        'recepient_pin'  => 'required',
        'recepient_country'  => 'required',
        'courier_desc'  => 'required',
        'weight'  => 'required',
        'length'  => 'required',
        'breadth'  => 'required',
        'height'  => 'required',
        'from_location'  => 'required',
        'to_location'  => 'required',
        'status'  => 'required|string', --}}



      </div>

</div>

@stop
@push('js')
<script>

    function courierFormSubmit() {
        $('#courier-form').attr('action', '{{ route('admin.courier.store') }}').submit();
    }



</script>

@endpush


