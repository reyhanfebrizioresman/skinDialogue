@extends('layouts.template')


@section('content')


            <div class="container">
                <div class="row">
                    <div class="col-6">
                            <h3>Data Kategori</h3>
                    </div>
                    <div class="col-6">
                    <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus"></i>
                  Tambah Data Kategori
                   </button>
                    </div>
                    </div>
                    <table class="table table-hover" id="category">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data_category as $category)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->nama_categories}}</td>                    
                        <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal">
                        Edit
                        </button>
                        <form action="{{route('category.update',$category->id)}}" method="POST">
                            {{csrf_field()}}
                            @method('PATCH')    
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input class="form-control" type="text" name="nama_categories" placeholder="Nama Kategori" value="{{$category->nama_categories}}">
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>     
                </div>
                
                <form action={{route('category.destroy',$category->id)}} method="POST" class="d-inline-block">
                     @csrf
                        @method('delete')
                          <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                              </td>
                          </tr>
                     @endforeach
                 </tbody>
            </table>
         </div>  
    </div>
        <form action="{{route('category.store')}}" method="POST">
            {{csrf_field()}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                   <div class="modal-body">
                     <div class="form-group">
                        <label>Name Category</label>
                        <input class="form-control" type="text" name="nama_categories" placeholder="Name Category">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>     
    </div>

 



   


@endsection
@section('addon')

<script>$(document).ready( function () {
    $('#category').DataTable();
} );
</script>
@endsection