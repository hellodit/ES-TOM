<div class="card">

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Banyak Konsultasi</th>
                        <th scope="col">Terdaftar Pada</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$users->isEmpty())
                    @foreach ($users as $nom => $user)
                    <tr>
                        <td data-label="no">{{ ($users->currentpage()-1) * $users->perpage() + $nom + 1 }}</td>
                        <td data-label="avatar"><img alt="image" src="{{asset('storage/user_photo/60/'.$user->avatar)}}" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="{{$user->name}}"></td>
                        <td data-label="name">{{$user->name}}</td>
                        <td data-label="email">{{$user->email}}</td>
                        <td data-label="name">{{$user->histories->count()}}  kali</td>
                        <td data-label="created_at">{{$user->created_at->diffForHumans()}}</td>
                        <td data-label="Action">
                            <a href="#" class="btn btn-primary btn-sm" onclick="actControl('detail','{{$user->id}}')" role="button" data-toggle="modal" data-target=".bs-modal-lg"
                                            style="cursor:pointer"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="actControl('delete','{{$user->id}}')"><i
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
            {!! $users->render() !!}
        </div>
    </div>
