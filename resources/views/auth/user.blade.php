@extends('layouts.template')

@section('content')
            <div class="container">
                <div class="row">
                     <div class="col-6">
                        <h3>User Managemnet</h3>
                     </div>

                     <div class="col-6">
                     <a href="{{route('user.create')}}" class="btn btn-primary btn-sm float-right">
                     <i class="fa fa-plus"> Tambah Data User</i>
                     </a>
                     </div>
                     </div>
                     <table class="table table-hover mt-3" id="user">
                     <thead>
                        <tr>
                            <th>Image</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach ($user as $u)
                        <tbody>
                        <tr>
                           <td><img width="50px" src="{{ url('userImage/'.$u->image) }}"></td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->level}}</td>
                            <td>
                                <a href="{{route('user.edit',$u->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action={{route('user.destroy',$u->id)}} method="POST" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                <button class="btn btn-sm bg-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
           
@endsection

@section('addon')

<script>
$(document).ready(function() {
    $('#user').DataTable({
      "iDisplayLength": 50
    });
});
</script>

@endsection