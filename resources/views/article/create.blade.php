@extends('layouts.template')

@section('content')
        <style>
                .image-box{
				width:300px;
				min-height:100px;
				border: 2px solid #dddddd;
				margin-top:15px;
				display:flex;
				align-items:center;
				justify-content:center;
				font-weight:bold;
				color:#cccccc;
			}
        </style>


    <div class="container">
<form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
@csrf

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
                                        <div class="image-box">
                                        <img id="output" style="width:100%;">
                                        </div>
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
                                        <label>Kategori</label>
                                        <select class="js-example-basic-single form-control" multiple="" name="categories[]">
                                            @foreach($categories as $c)
                                            <option value="{{$c->id}}">{{$c->nama_categories}}</option>
                                            @endforeach
                                      
                                            </select>
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

@endsection
@section('addon')

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

@endsection