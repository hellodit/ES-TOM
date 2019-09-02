<div class="card">
    <div class="card-header">
        <h4 class="title">{{$data['act']}}</h4>
    </div>
    <div class="card-body">
        <form method="POST" id="forms" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="labelName">Kode Perilaku</label>
                        <input type="text" class="form-control" name="code" value="{{!empty($data['behavior']) ?  $data['behavior']->code : null }}" placeholder="Kode perilaku">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori Perilaku</label>
                        <select class="form-control" name="category">
                            <option value="" selected desabled> Pilih Kategori Perilaku</option>
                            <option value="modalitasbelajar" selected desabled> Modalitas Belajar</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="labelName">Nama Perilaku</label>
                <input type="text" class="form-control" value="{{!empty($data['behavior']) ? $data['behavior']->name : null }}" name="nama" placeholder="Nama perilaku">
            </div>

            <div class="row m-t-10">
                <div class="col-lg-6">
                    <button type="button" onclick="actControl('form')" class="btn btn-block btn-danger"><i
                            class="fa fa-undo m-r-10"></i> Reset</button>
                </div>
                <div class="col-lg-6">
                    <button type="submit" id="submit-behavior" class="btn btn-block btn-info"><i class="fa fa-save m-r-10"></i>
                        Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>

    $("#submit-behavior").on('click', function(e){
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
