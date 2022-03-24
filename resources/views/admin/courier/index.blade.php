@extends('admin.layouts.inc.master')

@section('title', 'All Parcel')

@push('css')
@endpush

@section('content')

<div class="col-12">
@include('admin.alert')
</div>


<div class="col-md-12">
        <div class="card card-primary card-outline">

            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                <thead>
                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">TRACKING NUMBER</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">RECEPIENT NAME</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">RECEPIENT CONTACT</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">EDIT</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">DELETE</th></tr>
                </thead>
                <tbody>
                    @foreach ($couriers as $courier )
                <tr class="{{ $courier->id % 2 == 0 }} ? even : odd ">:
                    <td class="dtr-control sorting_1" tabindex="0">{{ $courier->tracking_no }}</td>
                    <td><a href="courier/{{$courier->id}}">{{ $courier->recipient_name  }}</a></td>
                    <td>{{ $courier->recepient_contact }}</td>
                    <td><a class="btn btn-block btn-primary" href="courier/{{$courier->id}}/edit">Edit</a></td>
                    <form action="/courier/{{ $courier->id }}" method="POST">
                        @method('DELETE')
                        @csrf

                        <td><button  type="submit" class="btn btn-block btn-primary" >Delete</button></td>
                    </form>

                </tr>
                @endforeach
               </tbody>
                <tfoot>
            </tfoot>
              </table>

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
