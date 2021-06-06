<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home : User</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />

    </head>
    <body>


        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex">
                     <div class="col">   
                    <h5 class="card-title">User Record</h5> 
                    </div>
                    <div class="col">
                    <a href="#" class="btn btn-success float-right mb-5" data-toggle="modal" data-target="#exampleModalLong">Add New</a>
                    </div>
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Avatar</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">
                            



                          </th>
                          <th scope="col">Action</th>


                        </tr>
                      </thead>
                      <tbody>
                      @foreach($work as $key=>$row) 
                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->email }}</td>
                          <td>   
                           @php
                           

                            $join = $row->date_of_joining;
                            $leave = $row->date_of_leaving;

                            $datetime1 = new DateTime($join);
                            $datetime2 = new DateTime($leave);
                            $interval = $datetime1->diff($datetime2);
                           $days = $interval->format('%a');

                           $years = floor($days / 365);
                              $months = floor(($days - ($years * 365))/30.5);
                              $days = ($days - ($years * 365) - ($months * 30.5));
                              

                           @endphp 

                          <span>
                          @if($years) {{ $years }} Years @endif  @if($months) {{ $months }} Months @endif  @if($days){{ $days }} Days @endif
                          @if($row->still_working==1)
                          <span class="badge badge-success">Still Working</span>
                          @endif  
                           </span>


                            </td>
                          <td>
                            <a href="{{ route('employee.destroy',$row->id) }}" id="delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                       @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
            </div>
               
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Add New Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
      	<form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">@csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="ext" class="form-control"name="name" placeholder="Enter Your Name">
          </div>


           <div class="form-group">
            <label for="exampleInputEmail1">Date of Joining</label>
            <input type="date" class="form-control" name="date_of_joining"  placeholder="Enter email">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Date of Leaving</label>
            <input type="date" class="form-control" name="date_of_leaving"  placeholder="Enter email">
          </div>

            <label for="exampleInputEmail1">Still Working</label>
            <input type="checkbox" name="still_working" aria-label="Checkbox for following text input" value="1">

             <div class="form-group">
            <label for="exampleInputEmail1">Avatar</label>
            <input type="file" class="form-control" name="avatar" placeholder="Enter email">
          </div>





      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
        @if(Session::has('message'))
          var type="{{ Session::get('alert-type','info' )}}";
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
     </script>  


<script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
    </body>

</html>
