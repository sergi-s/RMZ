@extends('layouts.app')

@section('content')
    <main>
        <section class="abt-box" style="margin-top: 6%">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <h2>Contact Us</h2>
                            <ol>
                                <li>Home<i class="flaticon-right-arrow"></i></li>
                                <li>Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------ -->
        <section class="contact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>get in touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Asperiores officiis explicabo blanditiis consequuntur fugit
                                fugiat, incidunt totam consectetur veritatis minus corporis
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Name" required="name" role="text"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Email" required="email"
                                        role="text" name="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Your Mobilenumber" required="phone"
                                        role="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="8" placeholder="Enter Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <a href="#">send message</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                            <div class="map">
                                <iframe style="width:100%"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
                                    height="480" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
