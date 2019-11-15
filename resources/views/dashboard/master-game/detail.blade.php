<div class="row">
    <div class="col-3">
        <img src="{{asset("uploads/images/".$data->image)}}" class="img-thumbnail" alt="">
    </div>
    <div class="col-9">
        <h2>{{$data->name}}</h2>
        <p class="mb-2"><span class="badge badge-primary">Kode Permainan : {{$data->code}}</span> | <span
                class="badge badge-primary">Kategori : {{$data->category}}</span> | <i class="fa fa-clock"></i>
            {{$data->created_at->diffForHumans()}} </p>
        {!!$data->description!!}
    </div>
</div>
<script type="text/javascript">
    $("#myLargeModalLabel").html("Detail Permainan");
</script>
