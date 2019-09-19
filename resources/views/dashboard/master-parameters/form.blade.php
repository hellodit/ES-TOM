<div class="card">
    <div class="card-header">
        <h4 class="title">{{$data['act']}}</h4>
    </div>
    <div class="card-body">
        <form method="POST" id="forms" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="labelName">Kode Parameter</label>
                <input type="text" class="form-control" name="code" placeholder="Kode parameter" value="{{!empty($data['parameter']) ? $data['parameter']->code : null }}">
            </div>

            <div class="form-group">
                <label for="labelName">Nama Parameter</label>
                <input type="text" class="form-control" name="name" placeholder="Nama parameter"  value="{{!empty($data['parameter']) ? $data['parameter']->name : null }}">
            </div>

            <div class="form-group">
                <label>Kategori Parameter</label>
                <select class="form-control" name="variable">
                    <option value="" selected desabled> Pilih Kategori Parameter</option>
                    @foreach ($data['variables'] as $variable)
                        <option value="{{$variable->id}}" {{ !empty($data['parameter']) ? $data['parameter']->variable_id == $variable->id ? 'selected' : null : null }}>{{$variable->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" id="parameter_description" cols="30" rows="10">{{!empty($data['parameter']) ? $data['parameter']->description : null }}</textarea>
            </div>


            <div class="row m-t-10">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <button type="button" onclick="actControl('form')" class="btn btn-block btn-danger"><i
                            class="fa fa-undo m-r-10"></i> Reset</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <button type="submit" id="submit-game" class="btn btn-block btn-info"><i class="fa fa-save m-r-10"></i>
                        Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $("#parameter_description").summernote({
        minHeight: 150,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['para', ['paragraph']]
        ]
    });
    $('#customFile').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    $("#submit-game").on('click', function(e){
        e.preventDefault();
        var el = $(this);
        el.prop('disabled', true);
        setTimeout(function(){el.prop('disabled', false); }, 3000);
        $.ajax({
            url: "{{$data['url'] }}",
            type: "{{$data['action']}}",
            data: new FormData($("#forms")[0]),
            processData: false,
            contentType: false,
            success: function (data) {
                $('.alert-container').html('<div class="alert alert-success">' + data.success +
                    '</div>')
                actControl("data");
                actControl("form");
            },
            error: function (data) {
                $('.alert-container').html('');
                if (data.responseJSON.errors) {
                    var val = '<ul>';

                    $.each(data.responseJSON.errors, function (key, value) {
                        console.log(key);
                        value.forEach(function (element) {
                            val += '<li>' + element + '</li>';
                        });
                    })
                    val += '</ul>';
                        $('.alert-container').append('<div class="alert alert-danger">' +
                            val + '</div>');
                } else if (data.responseJSON.msg) {
                    $('.alert-container').append('<div class="alert alert-danger">- ' + data
                        .responseJSON.msg + '</div>');
                }
                $('#forms button[type="submit"]').html('Simpan')
            }
        });
    });
</script>
