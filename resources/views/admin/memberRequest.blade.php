@extends('layouts.admin')

@section('content')

    @if ($errors->any())
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="content">
        <div class="row">
            <div class="col-12">
                <br><br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="text-align: center">Member Request</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example2" class="table table-sm table-responsive table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id:</th>
                                    <th>Name</th>
                                    <th>Phone num.</th>
                                    <th>Image</th>
                                    <th>Package name: </th>
                                    <th>Payment method:</th>
                                    <th>Paid amount:</th>
                                    <th>Payment from:</th>
                                    <th>Transaction Id:</th>
                                    <th>Action:</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $data)

                                    <tr>
                                        <td>{{ $data->user->id }}</td>
                                        <td>{{ $data->user->name }}</td>

                                        <td>{{ $data->user->userProfile->phone_number }}</td>

                                        <td>
                                            <a href="{{ asset('userImage/' . $data->user->userprofile->imagePath) }}"><img
                                                    src="{{ asset('userImage/' . $data->user->userprofile->imagePath) }}"
                                                    onerror="this.src='{{ asset('assets/images/avatar.png') }}'" alt=""
                                                    style="border-radius: 50%;height:100px;width:100px; margin-top: 10px;">
                                            </a>
                                        </td>

                                        <td>{{ $data->package_name }} <b> ({{ $data->time }} Month) </b></td>
                                        <td>{{ $data->payment_method }}</td>
                                        <td>{{ $data->payment_money }}</td>
                                        <td>{{ $data->payment_from_phone_num }}</td>
                                        <td>{{ $data->payment_transaction_id }}</td>
                                        <td>
                                            <form action="{{ route('member.approved', $data->id) }}" method="post">
                                                @csrf
                                                <select name="time" id="time">
                                                    <option value="">Select time</option>
                                                    <option value="1">1 month</option>
                                                    <option value="2">2 month</option>
                                                    <option value="4">4 month</option>
                                                    <option value="6">6 month</option>
                                                </select>
                                                <button onclick="return confirm('Are you sure?')"
                                                    class="btn btn-xs btn-warning" type="submit">Approved</button>
                                            </form>
                                        </td>
                                    </tr>


                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>




            </div>
        </div>

    </section>

@endsection
