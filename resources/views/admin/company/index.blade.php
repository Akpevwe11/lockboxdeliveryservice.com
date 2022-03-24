@extends('admin.layouts.inc.master')

@section('title', 'Add Company')

@push('css')
@endpush

@section('content')

<div class="col-12">
@include('admin.alert')
</div>

<div class="col-md-12">


    <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="m-8" id="heading">
              @if(count($companies) > 0)
                  Edit existing Company
                @else
                  Add new Company
                @endif
          </h5>
            </div>
        <!-- /.card-header -->
        <!-- form start -->


              <form action="" id="company-form" method="POST" enctype="multipart/form-data">

                @if(count($companies) > 0)

                @method('PUT')

                @endif

                  @csrf


                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                        <label for="company_name">Company Name</label>

                        <input type="text" name="company_name" id="company_name" class="form-control"
                         @if(count($companies) > 0)
                          value="{{ $company->company_name }}"
                          @endif
                         >

                        @error('company_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="company_logo">Company Logo</label>

                        <input type="file" name="company_logo" id="company_logo" class="form-control">

                        @error('company_logo')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 mt-3">
                        <label for="address">Company Address</label>
                        <textarea name="address" id="address"  rows="4" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $address }}"
                        @endif
                        ></textarea>
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-4 mt-3">
                        <label for="company_city">Company City</label>

                        <input type="text" name="company_city" id="company_city" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_city }}"
                        @endif
                        >

                        @error('company_city')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="col-4 mt-3">
                        <label for="company_state">Company State</label>

                        <input type="text" name="company_state" id="company_state" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_state }}"
                        @endif
                        >

                        @error('company_state')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="col-4 mt-3">
                        <label for="company_pin">Company Pincode</label>

                        <input type="text" name="company_pin" id="company_pin" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_pin }}"
                        @endif
                        >

                        @error('company_pin')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-3 mt-3">
                        <label for="company_country">Company Country</label>

                        <input type="text" name="company_country" id="company_country" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_country }}"
                        @endif
                        >

                        @error('company_country')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror


                    </div>
                    <div class="col-3 mt-3">
                        <label for="company_phone">Company Phone</label>

                        <input type="text" name="company_phone" id="company_phone" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_phone}}"
                        @endif
                        >

                        @error('company_phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-3 mt-3">
                        <label for="company_email">Company Email</label>

                        <input type="email" name="company_email" id="company_email" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_email }}"
                        @endif
                        >

                        @error('company_email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-3 mt-3">
                        <label for="company_gst">Company GST</label>

                        <input type="text" name="company_gst" id="company_gst" class="form-control"
                        @if(count($companies) > 0)
                        value="{{ $company->company_gst }}"
                        @endif
                        >

                        @error('company_gst')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                  </div>
          </div>

          <div class="card-footer">
              <div class="row">
                    <div class="col-6">
                        <button onclick="companyFormSubmit()" class="btn btn-primary">{{ count($companies) > 0 ? 'Update Company Details'
                        : 'Save Company Details' }}</button>
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

function companyFormSubmit() {

        var heading = $('#heading').val();

        if(heading = 'Add new Company') {
            $('#company-form').attr('action', '{{ route('admin.company.store') }}').submit();
        } else {
            $('#company-form').attr('action', '{{ route('admin.company.update') }}').submit();
        }


}
</script>

@endpush


