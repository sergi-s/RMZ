@extends('layouts.app')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@section('content')
    <section class="slider">
        <div class="vipleft"></div>
        <div class="vipright"></div>
        <div class="container" style="padding-top: 100px; align-items: center;">
            <h1>Becom VIP Member</h1>
            <br>
            <div style="margin: auto;
                    width: 50%;
                    padding: 10px;">

                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Payment Details
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="cardNumber">
                                            CARD NUMBER</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="cardNumber"
                                                placeholder="Valid Card Number" required autofocus />
                                            <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-lock"></span></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 col-md-7">
                                            <label for="expityMonth">
                                                EXPIRY DATE</label>
                                            <div class="form-group">
                                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                                    <input type="text" class="form-control" id="expityMonth"
                                                        placeholder="MM" required />
                                                </div>

                                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                                    <input type="text" class="form-control" id="expityYear"
                                                        placeholder="YY" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-md-5 pull-right">
                                            <div class="form-group">
                                                <label for="cvCode">
                                                    CV CODE</label>
                                                <input type="password" class="form-control" id="cvCode" placeholder="CV"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="badge pull-right"><span
                                            class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                            </li>
                        </ul>
                        <br />
                        <form action="/vipmember" method="get">
                            <button type="submit" class="btn btn-success btn-lg btn-block">proceed with payment</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
