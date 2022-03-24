@extends('admin.layouts.inc.master')

@section('title', 'Add Courier')

@push('css')
@endpush

@section('content')

<div class="col-12">
@include('admin.alert')
</div>

<div class="col-md-12">


    <div class="card card-primary card-outline">

              <form action="/add-parcel" id="courier-form" method="POST" enctype="multipart/form-data">


                  @csrf

                  @include('admin.courier.form')

          <div class="card-footer">
              <div class="row">
                    <div class="col-6">
                        <button onclick="courierFormSubmit()" class="btn btn-primary">
                        Save Courier Details</button>
                    </div>

                    <div class="col-6 text-right">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back</a>
                    </div>

              </div>
          </div>
    </form>

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


