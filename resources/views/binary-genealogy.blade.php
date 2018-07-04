@extends('layouts.dashboard')

@section('content')

<style media="screen">
/*Now the CSS*/
* {margin: 0; padding: 0;}
.tree{
  height: 500px;
}
.tree ul {
padding-top: 20px;
position: relative;
transition: all 0.5s;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
}

.tree li {
float: left;
text-align: center;
list-style-type: none;
position: relative;
padding: 20px 10px 0 10px;

transition: all 0.5s;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
content: '';
position: absolute; top: 0; right: 50%;
border-top: 1px solid #ccc;
width: 50%; height: 20px;
}
.tree li::after{
right: auto; left: 50%;
border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
border-right: 1px solid #ccc;
border-radius: 0 5px 0 0;
-webkit-border-radius: 0 5px 0 0;
-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
border-radius: 5px 0 0 0;
-webkit-border-radius: 5px 0 0 0;
-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
content: '';
position: absolute; top: 0; left: 50%;
border-left: 1px solid #ccc;
width: 0; height: 20px;
}

.tree li a{
border: 1px solid #ccc;
padding: 5px 10px;
text-decoration: none;
color: #666;
font-family: arial, verdana, tahoma;
font-size: 16px;
display: inline-block;

border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;

transition: all 0.5s;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after,
.tree li a:hover+ul li::before,
.tree li a:hover+ul::before,
.tree li a:hover+ul ul::before{
border-color:  #94a0b4;
}
</style>
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="ti-pin2"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            Ads Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="ti-pin2"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            Ads Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="ti-pin2"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            Ads Here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-info text-center">
                            <i class="ti-pin2"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            Ads Here
                        </div>
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
                <h4 class="title">Genealogy</h4>
            </div>
            <div class="content">
              <div class="tree">
                <ul>
              		<li>
              			<a href="#"><i class="ti-user"></i>You <br><b> {{  Auth::user()->firstname . ' ' .  Auth::user()->lastname }} </b></a>
              			<ul>
                      <li>
              					<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftSecond['account_no'] }}</b></a>
              					<ul>
                          <li>
                            <a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftLeftThird['account_no'] }}</b></a>
                            <ul>
                              <li>
                                <a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftLeftLeftFourth['account_no'] }}</b></a>
                              </li>
                              <li>
                                <a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftLeftRightFourth['account_no'] }}</b></a>
                              </li>
                            </ul>
                          </li>
              						<li>
              							<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftRightThird['account_no'] }}</b></a>
              							<ul>
              								<li>
              									<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftRightLeftFourth['account_no'] }}</b></a>
              								</li>
              								<li>
              									<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyLeftRightRightFourth['account_no'] }}</b></a>
              								</li>
              							</ul>
              						</li>
              					</ul>
              				</li>
              				<li>
              					<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightSecond['account_no'] }}</b></a>
              					<ul>
                          <li>
                            <a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightLeftThird['account_no'] }}</b></a>
                            <ul>
                              <li>
                                <a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightLeftLeftFourth['account_no'] }}</b></a>
                              </li>
                              <li>
                                <a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightLeftRightFourth['account_no'] }}</b></a>
                              </li>
                            </ul>
                          </li>
              						<li>
              							<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightRightThird['account_no'] }}</b></a>
              							<ul>
              								<li>
              									<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightRightLeftFourth['account_no'] }}</b></a>
              								</li>
              								<li>
              									<a href="#"><i class="ti-user"></i> <b>{{ $getGenealogyRightRightRightFourth['account_no'] }}</b></a>
              								</li>
              							</ul>
              						</li>
              					</ul>
              				</li>
              			</ul>
              		</li>
              	</ul>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
