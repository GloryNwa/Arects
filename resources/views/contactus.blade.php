@include('includes/header')<!-- Header end -->


      <!-- Portfolio -->
      <section id="portfolio">
        <div class="container portfolio_area ">
            <h2 style="margin-left:30px">Contact Us Today</h2>
          
<!--          
             <div id="filters">
                <button class="button is-checked" data-filter="*">Show All</button>
                <button class="button" data-filter=".buildings">Buildings</button>
                <button class="button" data-filter=".interior">Interior Design</button>
                <button class="button" data-filter=".isolation">Isolation</button>
                <button class="button" data-filter=".plumbing">Plumbing</button>
            </div>
             Portfolio grid -->		
            <div class="" style="">
                
                <form role="form" class=" col-md-10" action="/contact" method="POST" >
                @csrf
                @if(session()->has('response'))
                        <div class="alert alert-success">
                            {{ session()->get('response') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" id="email" placeholder="Email">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="phone"  class="form-control" id="phone" placeholder="Phone Number">
                    </div><br>
                    <div class="form-group">
                        <textarea class="form-control"  name="message" rows="5" id="msg" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-block" style="background:#c0c0c0; color:#fff"><strong>Submit</strong></button>
                </form>	
            </div><!-- Portfolio grid end -->
        </div>
     </div>
    </section><!-- Portfolio end --><!-- Portfolio end --><!-- About end -->

        <!-- Why us -->
        

        <!-- Contact form -->
    <!-- Contact form end -->

        <!-- Footer -->
@include('includes/footer')