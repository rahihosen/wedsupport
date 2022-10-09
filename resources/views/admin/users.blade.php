@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <br><br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="text-align: center">Member</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subscription End Date</th>
                                    <th>UserType</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $data)
                                    <tr>
                                        <td>{{ $data->user->id }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->user->email }}</td>
                                        <td>{{ $data->subscription_end_date }}</td>
                                        <td>Member</td>

                                        <td><a href="{{ route('deleteuser', $data->user->id) }}">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>


                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="text-align: center">Visitor</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id:</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>UserType</th>
                                    <th>Action</th>
                                    <th>Create member</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data)
                                    @if ($data->usertype == '2')
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>Visitor</td>
                                            <td>
                                                <a href="{{ route('deleteuser', $data->id) }}">Delete</a>

                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#exampleModalCenter{{ $data->id }}"
                                                    href="">Create
                                                    Member</a>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter{{ $data->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Member Create
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('member.create.admin', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class=" form-group row">
                                                                <label class="col-form-label col-sm-4 pt-0">Package
                                                                    Name</label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_name" id="gridRadios1"
                                                                            value="Basic" checked>
                                                                        <label class="form-check-label" for="gridRadios1">
                                                                            Basic
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_name" id="gridRadios2"
                                                                            value="Silver">
                                                                        <label class="form-check-label" for="gridRadios2">
                                                                            Silver
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_name" id="gridRadios2"
                                                                            value="gold">
                                                                        <label class="form-check-label" for="gridRadios2">
                                                                            Gold
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="package_name" id="gridRadios2"
                                                                            value="Diamond">
                                                                        <label class="form-check-label" for="gridRadios2">
                                                                            Diamond
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="colFormLabel"
                                                                    class="col-sm-4 col-form-label">Select
                                                                    Time</label>
                                                                <div class="col-sm-8">
                                                                    <select class="custom-select" name="time"
                                                                        id="inlineFormCustomSelect">
                                                                        <option selected value="">Choose...</option>
                                                                        <option value="1">1 Month</option>
                                                                        <option value="2">2 Month</option>
                                                                        <option value="3">3 Month</option>
                                                                        <option value="4">4 Month</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=" form-group row">
                                                                <label class="col-form-label col-sm-4 pt-0">Payment
                                                                    Method</label>
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="payment_method" id="gridRadios1"
                                                                            value="bkash" checked>
                                                                        <label class="form-check-label" for="gridRadios1">
                                                                            Bkash
                                                                        </label>
                                                                    </div>
                                                                    {{-- <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="gridRadios2" value="nagad">
                                        <label class="form-check-label" for="gridRadios2">
                                            Nagad
                                        </label>
                                        </div> --}}

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="colFormLabel"
                                                                    class="col-sm-4 col-form-label">Payment
                                                                    Amount</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" name="payment_money"
                                                                        class="form-control form-control"
                                                                        id="colFormLabelLg" min="1">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="colFormLabelLg"
                                                                    class="col-sm-4 col-form-label col-form-label">Bkash
                                                                    Number</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="bkash_or_nagad_num"
                                                                        class="form-control form-control"
                                                                        id="colFormLabelLg"
                                                                        placeholder="bkash number eg.:017xxxxxx22">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="colFormLabelLg"
                                                                    class="col-sm-4 col-form-label col-form-label">Transaction
                                                                    Id</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" name="transaction_id"
                                                                        class="form-control form-control"
                                                                        id="colFormLabelLg" placeholder="Transiction Id">
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
