
@extends('layouts.landing')

@section('content')
    <div class="main-login-bg">

        <div class="main">
            <div class="account-login container">
                <!--page-title-->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="login-img">
                           
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="login-card">
                            Hello {{session('name')}
                           
                           <table>
                           
                           <thead>
                           <th>sn</th>
                           <th>Name</th>
                           <th>Gender</th>
                           <th>Address</th>
                           <th>Phone</th>
                           <th>Ward</th>
                           <th>State</th>
                           <th>LGA</th>
                           </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach($data as $person)
                                      <tr>
                                      <td>{{$i++}}</td>
                                      <td>{{$person->name}}</td>
                                      <td>
                                      @if($person->gender == 1)
                                      Male
                                      @endif
                                      @if($person->gender == 2)
                                      Female
                                      @endif
                                      </td>
                                      <td>
                                      {{$person->address}}
                                      </td>
                                      <td>
                                      {{$person->phone}}
                                      </td>
                                      <td>{{$person->ward_name}}</td>
                                      <td>{{$person->state_name}}</td>
                                      <td>{{$person->lga_name}}</td>
                                      </tr>
                                        @endforeach
                        </tbody>
                           </table>
                        </div>
                    </div>

                </div>


            </div> <!--account-login-->

        </div><!--main-container-->

    </div>


    @endsection