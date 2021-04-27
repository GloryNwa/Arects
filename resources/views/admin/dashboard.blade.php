@include('admin.include/header')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <!-- <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>     -->

                   
                </div>
            </div>
            <div class="row clearfix w_social3">
                <div class=" col-md-12 ">
                <div class="card instagram-widget">
                <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-briefcase" style="color:black"></i> </div>
                            <div class="content">
                                <div class="text">Contact Messages</div>
                                <h5 class="number">{{count($countContact)}}</h5>
                            </div>
                          
                        </div>
                    </div>
                </div>
                </div>              
          </div>
        
 <div class="row clearfix">
<div class="col-md-12">
    <div class="card">
        <div class="body">
        <div class="table-responsive">
                <table class="table table-hover js-basic-example dataTable table-custom">
                    <thead class="thead-blue"style="background:#007bff;color:white">
                        <tr>
                            <th>Name</th>
                            <th>Emailt</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                  
                    @if(session()->has('response'))
                        <div class="alert alert-success">
                            {{ session()->get('response') }}
                        </div>
                    @endif
                    <tbody>
                    @if(count($contacts)>0)
                    <?php $x = 1;?>
                        @foreach($contacts as $contact)
                    <tr>
                        <td>{{$x++}}</td>
                            <td>{{$contact->Name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->created_at}}</td>
                            <td>
                            <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='/delete/contact/{{$contact->id}}'><i class="icon-trash" aria-hidden="true"></i>
                                </a></a>
                           </td>
                        </tr>
                   
                        @endforeach
                        @else

                <div class="alert alert-info">No Message Found, check back later!</div>

                @endif
                </tbody>
            </table>
            {{$contacts->links()}}
            </div>
        </div>
    </div>
</div>


<!-- <div class="col-lg-4">
    <div class="card">
        <div class="body">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addevent">Add New Event</button>
        </div>
    </div>
    <div class="card">
        <div class="body">
            <div class="event-name row">
                <div class="col-3 text-center">
                    <h4>11<span>Dec</span><span>2018</span></h4>
                </div>
                <div class="col-9">
                    <h6>Conference</h6>
                    <p>Mobile World Congress 2018</p>
                    <address><i class="fa fa-map-marker"></i> 4 Goldfield Rd. Honolulu, HI 96815</address>
                </div>
            </div>                            
           
         
            <div class="event-name row">
                <div class="col-3 text-center">
                    <h4>16<span>Dec</span><span>2018</span></h4>
                </div>
                <div class="col-9">
                    <h6>Repeating Event</h6>
                    <p>It is a long established fact that a reader will be distracted</p>
                    <address><i class="fa fa-map-marker"></i> 123 6th St. Melbourne, FL 32904</address>
                </div>
            </div>
            <div class="event-name row">
                <div class="col-3 text-center">
                    <h4>28<span>Dec</span><span>2018</span></h4>
                </div>
                <div class="col-9">
                    <h6>Google</h6>
                    <p>Google Hardware and Pixel 2 Launch</p>
                    <address><i class="fa fa-map-marker"></i> 514 S. Magnolia St. Orlando, FL 32806</address>
                </div>
            </div>
            
        </div>
        
    </div>
    <!-- <div class="card">
        <div class="body">
            <button type="button" class="btn btn-primary btn-block"><a href="/manage/events/" style="color:white">Manage Event</a></button>
        </div>
    </div> -->
</div> 


</div>


           
            
            
        </div>
    </div>
    
</div>
@include ('admin.include/footer')