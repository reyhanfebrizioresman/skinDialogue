@extends('layouts.template')

@section('content')
                <div class="container">
                <div class="row">
                        <div class="col-6">
                            <h3> Artikel </h3>
                        </div>
                        <div class="col-6">
                            <a href="article/create" class="btn btn-primary btn-sm float-right">
                            <i class="fa fa-plus"></i>
                            Tambah Data Artikel
                        </a>
                        </div>
                        </div>
                    <table class="table table-bordered mt-3" id="article">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Release Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        @foreach($data_article as $a)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img width="75px" src="{{ url('data_file/'.$a->image) }}"></td>
                            <td>{{$a->title}}</td>
                            <td>{{$a->description}}</td>
                            <td>{{$a->release_date}}</td>
                            <td>
                            <a class="btn btn-primary btn-sm" href="{{route('article.edit',$a->id)}}">Edit</a> 
                            
                            <form action={{route('article.destroy',$a->id)}} method="POST" class="d-inline-block">
                                @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
          </div>
             <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data" >
                 {{csrf_field()}}
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="uploads form-control" style="margin-top: 20px;" name="image">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label>Release_date</label>
                            <input class="form-control" type="text" name="release_date" placeholder="Release date">
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <input class="form-control" type="text" name="tags" placeholder="Tags">
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
    $('#article').DataTable();
} );
</script>
@endsection

