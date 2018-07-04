@extends('layouts.dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card card-user">
                    <div class="image">
                        <img src="assets/img/background.jpg" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                          <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                          <h4 class="title">{{ $user['firstname'] . ' ' . $user['lastname'] }}<br />
                             <a href="#"><small>{{ '@'. $user['username'] }}</small></a>
                          </h4>
                        </div>
                        <p class="description text-center">
                            "I like the way you work it <br>
                            No diggity <br>
                            I wanna bag it up"
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                                <h5>12<br /><small>Files</small></h5>
                            </div>
                            <div class="col-md-4">
                                <h5>2GB<br /><small>Used</small></h5>
                            </div>
                            <div class="col-md-3">
                                <h5>24,6$<br /><small>Spent</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Team Members</h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                                  @foreach($accounts as $account)
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                {{ $account->firstname . ' ' . $account->lastname }}
                                                <br />
                                                <span class="text-muted"><small>Account No. :{{ $account->account_no }}</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <!-- <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Creative Tim
                                                <br />
                                                <span class="text-success"><small>Available</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Flume
                                                <br />
                                                <span class="text-danger"><small>Busy</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                      @if ($error != '')
                      <div class="alert alert-danger alert-with-icon" data-notify="container">
                          <span data-notify="icon" class="ti-alert"></span>
                          <span data-notify="message">{{ $error }}</span>
                      </div>
                      @endif
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form action="{{ route('update-profile') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Account No</label>
                                        <input type="text" class="form-control border-input" disabled value="{{ $user['account_no'] }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input type="text" class="form-control border-input" placeholder="Company" name="firstname" value="{{ $user['firstname'] }}">
                                    </div>
                                </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control border-input" placeholder="Company" name="middlename" value="{{ $user['middlename'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control border-input" placeholder="Last Name" name="lastname" value="{{ $user['lastname'] }}">
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Username</label>
                                          <input type="text" class="form-control border-input" placeholder="Username" name="username" value="{{ $user['username'] }}">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control border-input" placeholder="Email" name="email" value="{{ $user['email'] }}">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Mobile Number</label>
                                          <input type="tel" class="form-control border-input" placeholder="Mobile Number" name="mobile" pattern="^(\+\d{1,3}[- ]?)?\d{9}$" required value="{{ $user['mobile'] }}">
                                      </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control border-input" placeholder="Home Address" name="address" value="{{ $userInfo['address'] }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control border-input" placeholder="City" name="city" value="{{ $userInfo['city'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control border-input" placeholder="Country" name="country" value="{{ $userInfo['country'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" class="form-control border-input" name="postal_code" placeholder="Postal Code" value="{{ $userInfo['postal_code'] }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="5" class="form-control border-input" name="about_me" placeholder="Here can be your description">{{ $userInfo['about_me'] }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script type="text/javascript">
  var isExistMessage = "{{ $message }}";
  if(isExistMessage){
      notification("{{$message}}");
  }

</script>
@endsection
