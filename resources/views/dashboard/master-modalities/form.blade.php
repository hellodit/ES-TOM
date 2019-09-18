<div class="card">
        <div class="card-header">
            <h4 class="title">{{$data['act']}}</h4>
        </div>
        <div class="card-body">
            <form method="POST" id="forms" enctype="multipart/form-data">
                @csrf
                <div class="row pb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="labelName">Kode Modalitas</label>
                            <input type="text" class="form-control" name="code" value="{{!empty($data['modality']) ?  $data['modality']->code : null }}" placeholder="Kode Modalitas">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="labelName">Nama Modalitas</label>
                            <input type="text" class="form-control" value="{{!empty($data['modality']) ? $data['modality']->name : null }}" name="nama" placeholder="Nama Modalitas">
                        </div>
                    </div>

                    <div class="col-md-12">
                            <div class="form-group">
                                    <label>Pilih Rentang Usia</label>
                                    <select class="form-control" name="age">
                                        <option value="" selected desabled> Pilih Rentang Usia</option>
                                        @foreach ($data['ages'] as $age)
                                            <option value="{{$age->id}}">{{$age->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                    </div>


                    <div class="col-md-12">
                            <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control" id="modality_description" cols="30" rows="10"></textarea>
                                </div>
                                    </div>
                </div>

                <div class="row m-t-10">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <button type="button" onclick="actControl('form')" class="btn btn-block btn-danger"><i
                                class="fa fa-undo m-r-10"></i> Reset</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                        <button type="submit" id="submit-modality" class="btn btn-block btn-info"><i class="fa fa-save m-r-10"></i>
                            Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $("#modality_description").summernote({
            minHeight: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['para', ['paragraph']]
            ]
        });

        $("#submit-modality").on('click', function(e){
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
