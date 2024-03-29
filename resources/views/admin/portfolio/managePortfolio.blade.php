@include ('admin.include/header2')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Manage</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><i class="icon-home"></i></li>
                            <li class="breadcrumb-item active">Past Projects</li>
                        </ul>
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
                                            <th>File</th>
                                            
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    @if(session()->has('response'))
                                        <div class="alert alert-success">
                                            {{ session()->get('response') }}
                                        </div>
                                    @endif
                                    <tbody>
                                    @if(count($portfolio)>0)
                                    <?php $x = 1;?>
                                      @foreach($portfolio as $port)
                                        <tr>
                                        <td>{{$port->descript}}</td>
                                            <td> <img src="{{$port->file}}" id="image" width="200px;height:200px" class="avatar" alt=""><td>

                                               <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                            data-toggle="tooltip"  data-original-title="Remove"><a onclick="return confirm('Are you really sure?')" href='/delete/portfolio/{{$port->id}}'><i class="icon-trash" aria-hidden="true"></i>
                                                </a></a>
                                           </td>
                                        </tr>
                                        @endforeach
                                        @else

                                <div class="alert alert-info">No Post Found</div>

                                @endif
                                </tbody>
                            </table>
                            {{$portfolio->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                </div> 

            </div>
        </div>
    </div>
    
</div>


<!-- Default Size -->
<div class="modal animated jello" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" rows="4" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="editData">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" rows="4" placeholder="Event Subject..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="form-group">
            <div class="form-group">
            <label for="time">Event Address</label>
            <input type="text" name="address" class="form-control" placeholder="Event Address..." required>
        </div>
        <div class="form-group">
        <label for="time">Schedule Date</label>
            <input type="date" name="date" class="form-control"placeholder="Event Date..." required>
        </div>

        <div class="form-group">
          <label for="time">Schedule time</label>
            <input type="text" name="date" class="form-control" placeholder="Schedule Time..." required>
        </div>

      <div class="modal-footer">
            
        <button type="submit" name="submit" class="btn btn-primary">Edit Event</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> 
      </div>  
        </form> 
    </div>
  </div>
</div>
<!-- Javascript -->
@include('admin.include/footerr')
