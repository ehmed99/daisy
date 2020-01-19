@extends('layouts.admin')

@section('content')
        <div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">   
                            <h4 class="mt-0 header-title">Customer Details</h4>
                            <form class="form-parsley" action="orderform.html" method="post">                              
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" required placeholder="Address" id="address" required data-parsley-minlength="4">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection