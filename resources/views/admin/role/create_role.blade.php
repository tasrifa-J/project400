@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Starlight</a>
        <span class="breadcrumb-item active">Admin Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Admin  </h6>
          <p class="mg-b-20 mg-sm-b-30">New Admin add form</p>
          <form action="{{ route('store-admin') }}" method="post" >
          	@csrf
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label"> Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="name"  required="">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="phone"  required="">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Email <span class="tx-danger">*</span></label>
                    <input class="form-control" type="email" name="email"  required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Password <span class="tx-danger">*</span></label>
                    <input class="form-control" type="password" name="password"  required="">
                  </div>
                </div>
              </div>
              <br><hr>
              <div class="row">
              	<div class="col-lg-4">
              		<label class="ckbox">
        					  <input type="checkbox" name="city" value="1">
        					  <span>City</span>
        					</label>
              	</div>
              	<div class="col-lg-4">
              		<label class="ckbox">
        					  <input type="checkbox" name="property_type" value="1">
        					  <span>Property Type</span>
        					</label>
              	</div>
              	<div class="col-lg-4">
              		<label class="ckbox">
        					  <input type="checkbox" name="status" value="1">
        					  <span>Property Status</span>
        					</label>
              	</div>
              	<div class="col-lg-4">
              		<label class="ckbox">
        					  <input type="checkbox" name="agent" value="1">
        					  <span>Agent</span>
        					</label>
              	</div>
              	<div class="col-lg-4">
              		<label class="ckbox">
        					  <input type="checkbox" name="blog" value="1">
        					  <span>Blog</span>
        					</label>
              	</div>
              	<div class="col-lg-4">
              		<label class="ckbox">
        					  <input type="checkbox" name="other" value="1">
        					  <span>Other</span>
        					</label>
              	</div>
                <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="role" value="1">
                    <span>Role</span>
                  </label>
                </div>
                <div class="col-lg-4">
                  <label class="ckbox">
                    <input type="checkbox" name="setting" value="1">
                    <span>Setting</span>
                  </label>
                </div>
              </div>
              <br><br><hr>
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5" type="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
