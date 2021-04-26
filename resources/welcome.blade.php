<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Super Admin | Loveworld Live Tv</title>
<meta name="description" content="Responsive, Bootstrap, BS4">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
<link rel="stylesheet" href="/assets/css/site.min.css">
<link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
</head>
<body class="layout-column" style="background-image: url('{{ asset('assets/img/z50.jpg')}}'); background-size: cover">


<div class="flex">
    <div class="w-xl w-auto-sm mx-auto py-5 mt-5">
        <div class="card">
            <div id="content-body">
                <div class="p-3">
                    <!-- {{-- @include('alert') --}} -->
                    <div class="p-4 d-flex flex-column">
                        <a href="#" class="navbar-brand align-self-center">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="..."><span class="hidden-folded d-inline l-s-n-1x align-self-center">
                          Loveworld Live Tv</span>
                        </a>
                    </div>
                    <form class="" role="form" action="{{ url('/login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="my-3 text-right">
                                <a href="#" class="text" style="font-size: 14px">Forgot password?</a>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-4">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 
{{-- @include('inc.footer') --}} -->

<script src="{{ asset('assets/js/site.min.js') }}"></script>
</body>
</html>

@include('includes/header')

        <!-- About -->
        <section id="services">
            <div class="container">
                <h2>OUR SERVICES</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img1.jpg" alt="Our Services" />
                            <h3>CONSTRUCTION MANAGEMENT</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img2.jpg" alt="Our Services" />
                            <h3>RENOVATION</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>ARCHITECTURE</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                 
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>DESIGN AND BUILDING CONTRACTING</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>PROJECT MANAGEMENT</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>BUILDING AND CONSTRUCTION MATERIALS SUPPLIES SERVICES</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>BUILDING AND CIVIL ENGINEERING CONTRACTING</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>CONSTRUCTION CONSULTANCY</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="/images/service_img3.jpg" alt="Our Services" />
                            <h3>QUALITY SURVERYING CONSULTANCY</h3>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a href="#services" class="btn know_btn" data-toggle="modal" data-target="#serviceModal">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->

        <!-- Why us -->
        
        QUALITY SURVERYING CONSULTANCY

        <!-- Contact form -->
    <!-- Contact form end -->

        <!-- Footer -->
       
<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModal">ARCHITECTURE</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>

       <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,

</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" >Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>

  @include('includes/footer')