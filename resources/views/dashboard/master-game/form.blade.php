<div class="card">
    <div class="card-header">
        <h4 class="title">{{$data['act']}}</h4>
    </div>
    <div class="card-body">
        <form method="POST" id="forms" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="labelName">Kode Permainan</label>
                <input type="text" class="form-control" name="code" placeholder="Kode permainan">
            </div>

            <div class="form-group">
                <label for="labelName">Nama Permainan</label>
                <input type="text" class="form-control" name="name" placeholder="Nama permainan">
            </div>

            <div class="form-group">
                <label>Kategori Permainan</label>
                <select class="form-control" name="category">
                    <option value="" selected desabled> Pilih Kategori Permainan</option>
                    @foreach ($data['categories'] as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Gambar Permainan</label>
                <div class="custom-file">
                    <input type="file" name="gameimage" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
            </div>


            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control" id="game_description" cols="30" rows="10"></textarea>
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
    $("#game_description").summernote({
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
                    $.each(data.responseJSON.errors, function (key, value) {
                        console.log(key);
                        var val = '<ul>';
                        value.forEach(function (element) {
                            val += '<li>' + element + '</li>';
                        });
                        val += '</ul>';
                        $('.alert-container').append('<div class="alert alert-danger">' +
                            val + '</div>');
                    })
                } else if (data.responseJSON.msg) {
                    $('.alert-container').append('<div class="alert alert-danger">- ' + data
                        .responseJSON.msg + '</div>');
                }
                $('#forms button[type="submit"]').html('Simpan')
            }
        });
    });
</script>
