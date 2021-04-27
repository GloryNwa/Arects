@include('includes/header')

        <!-- About -->
        <section id="services">
            <div class="container"style="background-color:
#ebecfd">
                <h2>OUR Clients</h2>
               
                <div class="row">


                @if(count($clients)>0)               
                  @foreach($clients as $client)
                    <div class="col-md-4" >
                        <div class="service_item">
                        <img src="{{$client->file}}" alt="Our Services" style="height:260px"/>
                            <h3 style="text-align:center">{{$client->name}}</h3>
                            <p></p>
                            <!-- <button class="btn know_btn"  data-toggle="modal" data-target="#exampleModalCenter">know more</button> -->
                        </div>
                    </div>
                @endforeach
               @else
                <div class="alert alert-info">No Clent Found, Check back lataer</div>
                @endif
             </div>
            </div>
        </section><!-- About end -->

        <!-- Why us -->
        


        <!-- Contact form -->
    <!-- Contact form end -->

        <!-- Footer -->
       
<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModal"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
     


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal" >Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>

  @include('includes/footer')