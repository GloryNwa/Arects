@include('admin.include/header2')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Ongoing Projects</h2>
                        <ul class="breadcrumb">
                                                   
                            <li class="breadcrumb-item">Ongoing</li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                        @if(session()->has('alert'))
                            <div class="alert alert-success">
                                {{ session()->get('alert') }}
                            </div>
                        @endif
                        </div>
                        <div class="body">
                          <h3>Ongoing Projects</h3>
                        <form id="basic-form" method="POST" action="{{route('ongoingProjects')}}" novalidate enctype='multipart/form-data'>
                             @csrf
                           
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Project Image</label>
                                    <input type="file" name="file" class="form-control" required>
                                </div>
                                <br>
                                <button type="submit" name="submit" class="btn btn-default" style="background-color:#449cff;color:#fff">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
            
        </div>
    </div>
    
</div>

<!-- Javascript -->

@include('admin.include/footerr')
