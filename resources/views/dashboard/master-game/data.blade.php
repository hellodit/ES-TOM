<div class="card">
    <div class="card-header">
        <h4>Tabel Permainan</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ketegori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!$games->isEmpty())
                @foreach ($games as $nom => $game)
                <tr>
                    <td data-label="No">{{ ($games->currentpage()-1) * $games->perpage() + $nom + 1 }}</td>
                    <td data-label="kode">{{$game->code}}</td>
                    <td data-label="Title">{{$game->name}}</td>
                    <td data-label="game">{{$game->category->name}}</td>

                    <td data-label="Action">
                        <a href="#" class="btn btn-primary btn-sm" onclick="actControl('detail','{{$game->id}}')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                                        style="cursor:pointer"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$game->id}}')"><i
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
        {!! $games->render() !!}
    </div>
</div>
