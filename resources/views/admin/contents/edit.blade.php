@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row p-1">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4 class="p-1">Edit Content</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('contents/'.$content->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf()
                                @method('PATCH')
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Select Menu</label>
                                        <select class="form-control" required name="menu" id="menu">
                                            <option value=''>Select Menu</option>
                                            @foreach ($menus as $item)
                                                <option 
                                                        @if ($content->mainMenuID == $item->id)
                                                            selected
                                                        @endif
                                                        value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Select Sub Menu</label>
                                        <select class="form-control" required name="submenu" id="submenu">
                                            <option value=''>Select Sub Menu</option>
                                            @foreach ($submenus as $item)
                                                <option 
                                                        @if ($content->subMenuID == $item->id)
                                                            selected
                                                        @endif
                                                        value="{{ $item->id }}">{{ $item->subMenuName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Title</label>
                                        <input required value="{{ $content->title }}" type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Short Description</label>
                                        <textarea class="form-control" name="shortDescription" id="shortDescription">
                                            {{ $content->shortDetails }}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Long Description</label>
                                        <textarea class="form-control" name="longDescription" id="longDescription">
                                            {{ $content->longDetails }}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="img">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary ml-2 mt-3">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#shortDescription').summernote({
            placeholder: 'Short Description',
            tabsize: 2,
            height: 100
        });
        $('#longDescription').summernote({
            placeholder: 'Long Description',
            tabsize: 2,
            height: 100
        });

        $('#menu').change(function(){
            var menuID = $('#menu').find('option:selected').val();
            $.ajax({
                    url: "{{ url('loadSubMenu') }}/"+menuID,
                    method: "GET",
                    dataType: "json",
                    success: function(data){
                        var output = '<option value="">Select Sub Menu</option>';
                        $.each(data,function(key,value)
                        {
                            output += '<option value="'+value.id+'">'+value.subMenuName+'</option>';
                        });
                        $('#submenu').html(output);
                    }
                });
        });

    });
</script>
@endsection