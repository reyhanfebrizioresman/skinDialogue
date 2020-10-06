@extends('layouts.template')

@section('content')

<form action="{{route('article.update',$article->id)}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PATCH')    

                            <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="image" value="{{$article->image}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" placeholder="Title"value="{{$article->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" placeholder="Description" value="{{$article->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Release_date</label>
                                        <input class="form-control" type="text" name="release_date" placeholder="Release date" value="{{$article->release_date}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="js-example-basic-multiple form-control" name="categories[]" multiple="multiple">
                                        @foreach($categories as $c)
                                        <option value="{{$c->id}}"
                                        @foreach($article->categories as $value)
                                        @if($c->id == $value->id)
                                        selected
                                        @endif
                                        @endforeach
                                        >{{$c->nama_categories}}</option>
                                        @endforeach
                                        </select>
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

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>

@endsection