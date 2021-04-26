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
                <div class="col-lg-6 col-md-6 col-xs-6">
                <div class="card instagram-widget">
                <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-briefcase" style="color:black"></i> </div>
                            <div class="content">
                                <div class="text">Newly Employees</div>
                                <h5 class="number">22</h5>
                            </div>
                          
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6">
                    <div class="card instagram-widget">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon"><i class="fa fa-users" style="color:black"></i> </div>
                            <div class="content">
                                <div class="text">All ICM Staff</div>
                                <h5 class="number">22</h5>
                            </div>
                          
                        </div>
                    </div>
                    </div>
                </div>
              

				
                

            <div class="row clearfix">
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                  
                        <div class="header">
                         <div class="body">
                           <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-blue"style="background:#007bff;color:white">
                                        <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        
                                        <th>message</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 
                                        <td>Erin Gonzales</td>
                                            
                                            <td><span>Android Developer</span></td>
                                            <td><span>July</span></td>
                                            <td><span class="badge badge-success">Exeptional</span></td>
                                            <!-- <td><span class="sparkbar">2,-5,3,-6,-4,8,-1</span></td> -->
                                            <td>
                                               <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>

                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='#'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                           </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                       
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="header">
                            <h2>ToDo List</h2>
                        </div>
                        <div class="body todo_list">
                            <ul class="list-unstyled">
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>New Employee intro</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 3:00 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Send email to CEO</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>New Joing Employee Welcome kit</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small><a href="#">John Smith</a> Designer</small><br>
                                        <small><a href="#">Hossein Shams</a> Developer</small><br>
                                        <small><a href="#">Maryam Amiri</a> SEO</small><br>
                                        <small><a href="#">Mike Litorus</a> iOS Developer</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Birthday Wish</span>
                                    </label>
                                    <div class="m-l-35">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>


           
            
            
        </div>
    </div>
    
</div>
@include ('admin.include/footer')