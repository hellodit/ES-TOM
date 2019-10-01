<div class="card">
    <div class="card-header">
        <h4>Tabel Parameter</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Variabel</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!$parameters->isEmpty())
                @foreach ($parameters as $nom => $parameter)
                <tr>
                    <td data-label="No">{{ ($parameters->currentpage()-1) * $parameters->perpage() + $nom + 1 }}</td>
                    <td data-label="kode">{{$parameter->code}}</td>
                    <td data-label="Title">{{strip_tags($parameter->name)}}</td>
                    <td data-label="parameter"><span class="badge badge-primary">{{$parameter->variable->name}}</span>
                        </td>

                    <td data-label="Action" style="min-width:120px">
                        <a href="#" class="btn btn-info btn-sm" onclick="actControl('form','{{$parameter->id}}')"><i
                                            class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$parameter->id}}')"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">Maaf, data belum tersedia</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {!! $parameters->render() !!}
    </div>
</div>
