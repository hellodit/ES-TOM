<div class="card">
        <div class="card-header">
            <h4>Tabel Modalitas Anak</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelompok Usia</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$modalities->isEmpty())
                        @foreach ($modalities as $nom => $modality)
                            <tr>
                                <td data-label="No">{{ ($modalities->currentpage()-1) * $modalities->perpage() + $nom + 1 }}</td>
                                <td data-label="kode">{{$modality->code}}</td>
                                <td data-label="kode">{{$modality->name}}</td>
                                <td data-label="kode">{{$modality->age->name}}</td>

                                <td data-label="Action">
                                    <a href="#" class="btn btn-primary btn-sm" onclick="actControl('detail','{{$modality->id}}')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                                                style="cursor:pointer"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm" onclick="actControl('form','{{$modality->id}}')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                                                    style="cursor:pointer"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$modality->id}}')"><i
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
            {!! $modalities->render() !!}
        </div>
    </div>
