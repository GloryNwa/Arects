@include('includes/header')<!-- Header end --><!-- Header end -->
    <br><br>

      <!-- Portfolio -->
      <section id="portfolio">
        <div class="container portfolio_area text-center">
            <h2>Ongoing Projects</h2>
            <hr>
<!-- 
            <div id="filters">
                <button class="button is-checked" data-filter="*">Show All</button>
                <button class="button" data-filter=".buildings">Buildings</button>
                <button class="button" data-filter=".interior">Interior Design</button>
                <button class="button" data-filter=".isolation">Isolation</button>
                <button class="button" data-filter=".plumbing">Plumbing</button>
            </div> -->
            <!-- Portfolio grid -->		
            <div class="grid">
                <div class="grid-sizer"></div>

                @if(count( $ongoing)> 0)               
              @foreach( $ongoing as $project)

                <div class="grid-item buildings interior isolation">
                    <img alt="" src="{{$project->file}}">

                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{$project->file}}" data-fancybox-group="gallery" title="{{$project->name}}"><span class="fa fa-eye"></span></a>
                        <!-- <a href="#"><span class="fa fa-link"></span></a> -->
                    </div>   
                </div>
                @endforeach
               @else
                <div class="alert alert-info">No available ongoing project, check back lataer</div>
                @endif


            
            </div><!-- Portfolio grid end -->

            

            </div>
        </div>
    </section><!-- Portfolio end --><!-- Portfolio end --><!-- About end -->

        <!-- Why us -->


        <section id="portfolio">
        <div class="container portfolio_area text-center">
            <h2>Past Projects</h2>
            <hr>
            <!-- Portfolio grid -->		
            <div class="grid">
                <div class="grid-sizer"></div>

                @if(count($past)> 0)               
              @foreach($past as $port)

                <div class="grid-item buildings interior isolation">
                    <img alt="" src="{{$port->file}}">

                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{$port->file}}" data-fancybox-group="gallery" title="{{$port->descript}}"><span class="fa fa-eye"></span></a>
                        <!-- <a href="#"><span class="fa fa-link"></span></a> -->
                    </div>   
                </div>
                @endforeach
               @else
                <div class="alert alert-info">No available ongoing project, check back lataer</div>
             @endif


            
            </div><!-- Portfolio grid end -->

            

            </div>
        </div>
    </section><!-- Portfolio end --><!-- Portfolio end --><!-- About end -->

        


        <!-- Contact form -->
    <!-- Contact form end -->

        <!-- Footer -->
        
        <!-- Footer -->
        @include('includes/footer')