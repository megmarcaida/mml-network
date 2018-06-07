@extends('admin.layouts.app')

@section('content')
<!-- <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="master-file" class="current">Master File</a></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="widget-box">
                      <div class="widget-title">
                         @if(session()->has('isActive'))
                            <ul class="nav nav-tabs">
                                <li class="{{ session()->get('isActive') == 1 ? 'active' : '' }}"><a data-toggle="tab" href="#companyinfo">Company Info</a></li>
                                <li class="{{ session()->get('isActive') == 2 ? 'active' : '' }}"><a data-toggle="tab" href="#tab2">Income Setup</a></li>
                                <li class="{{ session()->get('isActive') == 3 ? 'active' : '' }}"><a data-toggle="tab" href="#tab3">Tab3</a></li>
                            </ul>
                          @else
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#companyinfo">Company Info</a></li>
                                <li><a data-toggle="tab" href="#tab2">Income Setup</a></li>
                                <li><a data-toggle="tab" href="#tab3">Tab3</a></li>
                            </ul>
                          @endif
                      </div>
                      <div class="widget-content tab-content">
                          <div id="companyinfo" class="tab-pane {{  session()->has('isActive') ? session()->get('isActive') == 1 ? 'active' : '' : 'active' }}">

                            <div class="span12">
                              <div class="widget-box">
                                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                  <h5>Company Info</h5>
                                </div>
                                <div class="widget-content nopadding">
                                  @if(session()->has('message'))
                                      <div class="alert alert-success">
                                          {{ session()->get('message') }}
                                      </div>
                                  @endif
                                  <form action="{{ route('save-master-file') }}" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="control-group">
                                      <label class="control-label">Company Name :</label>
                                      <div class="controls">
                                        <input type="text" value="{{ $master_file['company_name'] }}" class="span11" name="company_name" placeholder="Company Name" />
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label">Company Abbreviation :</label>
                                      <div class="controls">
                                        <input type="text" class="span11" value="{{ $master_file['company_abbr'] }}" name="company_abbr" placeholder="Company Abbreviation" />
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label">Company Address</label>
                                      <div class="controls">
                                        <input type="text"  class="span11" value="{{ $master_file['company_address'] }}" name="company_address" placeholder="Address"  />
                                      </div>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label">Contact Number :</label>
                                      <div class="controls">
                                        <input type="text" class="span11" value="{{ $master_file['company_contact_no'] }}" name="company_contact_no" placeholder="Contact Number"/>
                                    </div>
                                    <div class="control-group">
                                      <label class="control-label">Owner :</label>
                                      <div class="controls">
                                        <input type="text" class="span11" value="{{ $master_file['company_owner'] }}" name="company_owner" placeholder="Owner Name"/>
                                      </div>
                                    </div>
                                    <div class="form-actions">
                                      <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                          <div id="tab2" class="tab-pane {{  session()->has('isActive') ? session()->get('isActive') == 2 ? 'active' : '' : '' }}">

                              <div class="span12">
                                <div class="widget-box">
                                  <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                    <h5>Income Setup</h5>
                                  </div>
                                  <div class="widget-content nopadding">
                                    @if(session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <form action="{{ route('save-income-setup') }}" method="post" class="form-horizontal">
                                      @csrf
                                      <div class="control-group">
                                        <label class="control-label">Sponsor Income :</label>
                                        <div class="controls">
                                          <input type="text" value="{{ $income_setup['sponsor_income'] }}" class="span11" name="sponsor_income" placeholder="Sponsor Income" />
                                        </div>
                                      </div>
                                      <div class="control-group">
                                        <label class="control-label">Pairing Income :</label>
                                        <div class="controls">
                                          <input type="text" class="span11" value="{{ $income_setup['pairing_income'] }}" name="pairing_income" placeholder="Pairing Income" />
                                        </div>
                                      </div>
                                      <div class="control-group">
                                        <label class="control-label">Direct Income :</label>
                                        <div class="controls">
                                          <input type="text"  class="span11" value="{{ $income_setup['direct_income'] }}" name="direct_income" placeholder="Direct Income"  />
                                        </div>
                                      </div>
                                      <div class="control-group">
                                        <label class="control-label">Indirect Income :</label>
                                        <div class="controls">
                                          <input type="text" class="span11" value="{{ $income_setup['indirect_income'] }}" name="indirect_income" placeholder="Indirect Income"/>
                                      </div>
                                      <div class="control-group">
                                        <label class="control-label">Leadership Income :</label>
                                        <div class="controls">
                                          <input type="text" class="span11" value="{{ $income_setup['leadership_income'] }}" name="leadership_income" placeholder="Leadership Income"/>
                                        </div>
                                      </div>
                                      <div class="form-actions">
                                        <button type="submit" class="btn btn-success">Save</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>

                        </div>
                          <div id="tab3" class="tab-pane">

                          </div>
                      </div>
                  </div>
    </div>
  </div>
</div>
</div>
@endsection
