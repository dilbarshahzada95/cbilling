@extends('layouts.master')
@section('title', 'Manage Tank ')
@section('content')
<div class="page-content">




    <div class="card radius-10">

        <div class="card-body">

            <div class="d-flex align-items-center">

                <div>
                    <h6 class="mb-2">Manage Tank </h6>
                </div>

            </div>
            <div class="table-responsive">
                <table class="table align-middle mb-0" id="tank-table">
                    <thead class="table-light">
                        <tr>
                            <th>Sl no</th>
                            <th>Tank ID</th>
                            <th>Tank Name</th>
                            <th>Imei</th>
                            <th>Tnak Location</th>
                            <th>Fuel Type</th>
                            <th>Tank Capacity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection
@section('scripts')
    <script src="{{ asset('code/js/tank.js') }}"></script>
@endsection
