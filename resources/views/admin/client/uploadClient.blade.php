@include('admin.include/header2')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Client</h2>
                        <ul class="breadcrumb">
                                                    
                            <li class="breadcrumb-item"></li>
                            <li class="breadcrumb-item active">Clients</li>
                        </ul>
                    </div>            
                   
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                        <h3>Clients</h3>
                        @if(session()->has('response'))
                            <div class="alert alert-success">
                                {{ session()->get('response') }}
                            </div>
                        @endif
                        </div>
                         <div class="body">
                            <form id="basic-form" method="POST" action="{{route('client')}}" novalidate enctype='multipart/form-data'>
                             @csrf
                              
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Company Image</label>
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

