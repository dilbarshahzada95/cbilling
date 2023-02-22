@extends('layouts.master')
@section('title',
    'Create a Tag
    ')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>
                            Create a Tag</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Tag</li>
                            <li class="breadcrumb-item active">Create a Tag </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid project-create">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form theme-form">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="department_id">Client *</label>
                                                        <select class="form-control select2 w-100" name="client_id"
                                                            id="client_id">
                                                            <option value="">Select Client</option>
                                                            <option value="1">Client1</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="documents">Vehicle </label>
                                                        <select class="form-control " name="vehicle_id" id="vehicle_id">
                                                            <option value="">Select Vehicle</option>
                                                            <option value="4970">
                                                                Yaris HB 1.3L AT-
                                                                1/2035-
                                                                AUH670529
                                                            </option>
                                                        </select>
                                                    </div>

                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Vehicle Identification Code</label>
                                                        <input type="text" class="form-control"
                                                            name="identification_code" id="identification_code"
                                                            aria-describedby="emailHelp"
                                                            placeholder="Enter Vehicle Identification Code" required=""
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="documents">Identification Type</label>
                                                        <select
                                                            class="form-control select2 form-select select2-hidden-accessible"
                                                            data-placeholder="Choose one" name="type" id="type"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option value="iButton">
                                                                iButton</option>
                                                            <option value="RFID">
                                                                RFID</option>
                                                            <option value="Code">
                                                                Code</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-md-12">
                                                    <label for="exampleInputEmail1">Limit</label>
                                                    <table class="table table-bordered  border-bottom table-responsive">
                                                        <thead>
                                                            <tr style="text-align: center;">
                                                                <th class="border-bottom-0" style="width : 500px">- </th>
                                                                <th class="border-bottom-0" style="width : 500px">LIMIT
                                                                </th>
                                                                <th class="border-bottom-0" style="width : 500px">BALANCE
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="text-align: center;">
                                                            <tr>
                                                                <td> Absolute </td>
                                                                <td><input type="text" name="absLimit" class="minimal"
                                                                        value="0"></td>
                                                                <td><input type="text" name="absBalance" class="minimal"
                                                                        value="0">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Shift </td>
                                                                <td><input type="text" name="shiftLimit" class="minimal"
                                                                        value="0">
                                                                </td>
                                                                <td><input type="text" name="shiftBalance"
                                                                        class="minimal" value="0">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Day </td>
                                                                <td><input type="text" name="dayLimit" class="minimal"
                                                                        value="0">
                                                                </td>
                                                                <td><input type="text" name="dayBalance" class="minimal"
                                                                        value="0">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Week </td>
                                                                <td><input type="text" name="weekLimit" class="minimal"
                                                                        value="0">
                                                                </td>
                                                                <td><input type="text" name="weekBalance"
                                                                        class="minimal" value="0">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Month </td>
                                                                <td><input type="text" name="monthLimit"
                                                                        class="minimal" value="0">
                                                                </td>
                                                                <td><input type="text" name="monthBalance"
                                                                        class="minimal" value="0">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Is one time </td>
                                                                <td><input type="checkbox" name="isOneTime"
                                                                        value="1" class="minimal">
                                                                </td>
                                                                <td>-
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Fuel types
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <label for="exampleInputEmail1">1</label>
                                                                        <input type="checkbox" name="fuelTypes[]"
                                                                            class="minimal" value="1">
                                                                    </div>
                                                                    <div>
                                                                        <label for="exampleInputEmail1">2</label>
                                                                        <input type="checkbox" name="fuelTypes[]"
                                                                            class="minimal" value="2">
                                                                    </div>
                                                                    <div>
                                                                        <label for="exampleInputEmail1">3</label>
                                                                        <input type="checkbox" name="fuelTypes[]"
                                                                            class="minimal" value="4">
                                                                    </div>
                                                                    <div>
                                                                        <label for="exampleInputEmail1">4</label>
                                                                        <input type="checkbox" name="fuelTypes[]"
                                                                            class="minimal" value="8">
                                                                    </div>

                                                                </td>
                                                                <td>-
                                                                </td>
                                                            </tr>


                                                        </tbody>

                                                    </table>
                                                </div>


                                            </div>
                                            <div class="col-md-12" style="padding: 10px;">

                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>






                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
