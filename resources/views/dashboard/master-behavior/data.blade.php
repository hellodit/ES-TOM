<div class="card">
    <div class="card-header">
        <h4>Tabel Data Perilaku Anak</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!$behaviors->isEmpty())
                @foreach ($behaviors as $nom => $behavior)
                <tr>
                    <td data-label="No">{{ ($behaviors->currentpage()-1) * $behaviors->perpage() + $nom + 1 }}</td>
                    <td data-label="kode">{{$behavior->code}}</td>
                    <td data-label="Title">{{$behavior->name}}</td>
                    <td data-label="Action">
                        <a href="#" class="btn btn-primary btn-sm" onclick="actControl('form','{{$behavior->id}}')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                                        style="cursor:pointer"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$behavior->id}}')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">Maaf, data belum tersedia</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {!! $behaviors->render() !!}
    </div>
</div>
