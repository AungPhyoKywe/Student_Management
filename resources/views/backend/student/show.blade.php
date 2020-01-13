@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><a href="{{route('student.create')}}" class="btn btn-primary"> + Add New Student</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>class</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                 <tr>
                                     <td><img class="rounded-circle" src="/uploads/logos/{{$d->profile_image}}"width="70"height="70"></td>
                                     <td>{{ $d->name }}</td>
                                     <td>{{ $d->class_name }}</td>
                                     <td>{{ $d->ph_no }}</td>
                                     <td>{{ $d->address }}</td>
                                     <td>
                                         <a href="{{route('student.edit',$d->id) }}" class="btn-sm btn-success">edit</a>
                                         <a href="#" onclick="confirmation({{ $d->id }})"  class="btn-sm btn-danger">delete</a>
                                     </td>
                                 </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                    <!-- /.card -->
            </div>

        </section>
    </div>

    <script>
    $(document).ready( function () {

        $('#example2').DataTable(

            {
                responsive: true
            }
        );
    });

    function confirmation($id) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: [
                    'No, cancel it!',
                    'Yes, I am sure!'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    swal({
                        title: 'Shortlisted!',
                        text: 'Candidates are successfully shortlisted!',
                        icon: 'success'
                    }).then(function () {
                        window.location.href='/students/'+$id;
                    })
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            })

    }

</script>
@stop
