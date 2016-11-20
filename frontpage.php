<?php
if(!defined("IS_INCLUDED")){header("Location:unauthorised_error.php");}
?>
<header class="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="./"><img src="img/_agora_logo.png" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            <a href="#about" class="scroll">About</a> &nbsp;&nbsp;
            <a href="./forum" class="scroll">Forum</a> &nbsp;&nbsp;
            <a href="./jobs" class="scroll">Jobs</a> &nbsp;&nbsp;
            <a href="#modal-form" data-toggle="modal">Sign in</a>
          </div>
        </div>

        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1 class="wow fadeIn">Welcome to Agora Code Community!</h1>
            <br />
            <p class="lead wow fadeIn" data-wow-delay="0.5s">where coders come together to share resources and teach each other code. It's also platform to network and connect with other coders.</p>
            <br />

            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                  <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="1s">
                    <a href="#about" class="btn btn-secondary btn-lg scroll">Learn More</a>
                  </div>
                  <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                    <a href="#invite" class="btn btn-primary btn-lg scroll">Request Invite</a>
                  </div>
                </div><!--End Button Row-->
              </div>
            </div>

          </div>
        </div>
      </div>
    </header>
<section id="about" class="pad-xl">
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
<h2>Be the first</h2>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipis.</p>
</div>
</div>

<div class="iphone wow fadeInUp" data-wow-delay="1s">
<img src="img/iphone.png">
</div>
</div>
</section>

<section id="main-info" class="pad-xl">
<div class="container">
<div class="row">
<div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
<hr class="line purple">
<h3>App Feature One Here</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
</div>
<div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
<hr  class="line blue">
<h3>App Feature One Here</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
</div>
<div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
<hr  class="line yellow">
<h3>App Feature One Here</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut est facilisis, eu elementum mi volutpat. Pellentesque ac tristique nisi.</p>
</div>
</div>
</div>
</section>


<!--Pricing-->
<section id="pricing" class="pad-lg">
<div class="container">
<div class="row margin-40">
<div class="col-sm-8 col-sm-offset-2 text-center">
<h2 class="white">Pricing</h2>
<p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.</p>
</div>
</div>

<div class="row margin-50">

<div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
<br />
<ul class="list-unstyled pricing-table text-center">
<li class="headline"><h5 class="white">Personal</h5></li>
<li class="price"><div class="amount">$5<small>/m</small></div></li>
<li class="info">2 row section for you package information. You can include all details or icons</li>
<li class="features first">Up To 25 Projects</li>
<li class="features">10GB Storage</li>
<li class="features">Other info</li>
<li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
</ul>
</div>

<div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
<ul class="list-unstyled pricing-table active text-center">
<li class="headline"><h5 class="white">Professional</h5></li>
<li class="price"><div class="amount">$12<small>/m</small></div></li>
<li class="info">2 row section for you package information. You can include all details or icons</li>
<li class="features first">Up To 25 Projects</li>
<li class="features">10GB Storage</li>
<li class="features">Other info</li>
<li class="features">Other info</li>
<li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
</ul>
</div>

<div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
<br />
<ul class="list-unstyled pricing-table text-center">
<li class="headline"><h5 class="white">Business</h5></li>
<li class="price"><div class="amount">$24<small>/m</small></div></li>
<li class="info">2 row section for you package information. You can include all details or icons</li>
<li class="features first">Up To 25 Projects</li>
<li class="features">10GB Storage</li>
<li class="features">Other info</li>
<li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
</ul>
</div>

</div>

</div>
</section>


<section id="invite" class="pad-lg light-gray-bg">
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 text-center">
<i class="fa fa-envelope-o margin-40"></i>
<h2 class="black">Get the invite</h2>
<br />
<p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.</p>
<br />

<div class="row">
<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
<form role="form">
<div class="form-group">
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
</div>
<button type="submit" class="btn btn-primary btn-lg">Request Invite</button>
</form>
</div>
</div><!--End Form row-->

</div>
</div>
</div>
</section>


<section id="press" class="pad-sm">
<div class="container">

<div class="row margin-30 news-container">
<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="0.8s">
<a href="#" target="_blank">
<img class="news-img pull-left" src="img/press-01.jpg" alt="Tech Crunch">
<p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut.<br />
<small><em>Tech Crunch - January 15, 2015</em></small></p>
</a>
</div>
</div>

<div class="row margin-30 news-container">
<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
<a href="#" target="_blank">
<img class="news-img pull-left" src="img/press-02.jpg" alt="Forbes">
<p class="black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra orci ut. <br />
<small><em>Forbes - Feb 25, 2015</em></small></p>
</a>
</div>
</div>

</div>
</section>