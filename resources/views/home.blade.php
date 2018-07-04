@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-warning text-center">
                            <i class="ti-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Total Downlines</p>
                            105
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                      Total Downline Added Today : 10
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-wallet"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Revenue</p>
                            P0.00
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Last day : P0.00
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="ti-rss-alt"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Total Sponsorship</p>
                            45
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        Total Sponsorship Added Today : 1
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Dashboard</h4>
            </div>
            <div class="content">
              <div class="alert alert-success">
                  <button type="button" aria-hidden="true" class="close">×</button>
                  <span style="text-align:center;"><code>Referral Link: <input onclick="copyLink()" readonly style="background: transparent;width: 350px;outline: none;box-shadow: none; border: none;" value="{{ config('app.referral_link', 'http://localhost/mml-network') }}/register/{{$user['account_no']}}" type="text" id="referral_link"></code></span>
              </div>
                <div class="footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Click
                        <i class="fa fa-circle text-warning"></i> Click Second Time
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="ti-reload"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="header">
                <h4 class="title">Email Statistics</h4>
                <p class="category">Last Campaign Performance</p>
            </div>
            <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                <div class="footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> Open
                        <i class="fa fa-circle text-danger"></i> Bounce
                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="ti-timer"></i> Campaign sent 2 days ago
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card ">
            <div class="header">
                <h4 class="title">2015 Sales</h4>
                <p class="category">All products including Taxes</p>
            </div>
            <div class="content">
                <div id="chartActivity" class="ct-chart"></div>

                <div class="footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> Tesla Model S
                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                    </div>
                    <hr>
                    <div class="stats">
                        <i class="ti-check"></i> Data information certified
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
