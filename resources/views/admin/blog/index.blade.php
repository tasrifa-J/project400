@extends('admin.admin_layouts')
@section('admin_content')
  <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Post Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Post List</h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Post Title</th>
                  <th class="wd-15p">Date</th>
                  <th class="wd-15p">Image One</th>
                  <th class="wd-15p">Image Two</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($post as $row)
                <tr>
                  <td>{{$row->title}}</td>
                  <td>{{$row->date}}</td>
                  <td><img src="{{ url($row->image_one)}}" height="50px" width="50px"></td>
                  <td><img src="{{ url($row->image_two)}}" height="50px" width="50px"></td>
                  <td>
                    <a href="{{url('edit-post/'.$row->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    <a href="{{url('delete/post/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete"><i class="fa fa-trash"></i></a>    
                  </td>
                </tr>  
              @endforeach    
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
</div>
@endsection