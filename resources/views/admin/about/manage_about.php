@include('includes/header');

<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Manage Report</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Manage</li>
                            <li class="breadcrumb-item active">Report</li>
                        </ul>
                    </div>  

                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                      
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Report</th>
                                            <th>Month</th>
                                            <th>Download</th>
                                            <th>Print</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-arrow-down"
                                                data-toggle="tooltip" data-original-title="Download"><i class="icon-arrow-down" aria-hidden="true"></i></a></td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-printer"
                                                data-toggle="tooltip" data-original-title="Print"><i class="icon-printer" aria-hidden="true"></i></a></td>
                                            <td>
                                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></a></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>

            <div class="row clearfix">
               
                <div class="col-lg-12">
                    
                </div>
            </div>

        </div>
    </div>
    
</div>
@include('includes/footerr')