

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Permainan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($user->histories))
                            @foreach ($user->histories as $key =>  $history)
                            <tr>
                                <td data-label="No">{{$key+1}}</td>
                                <td data-label="kode">{{$history->childname}}</td>
                                <td data-label="kode">{!!indo_date($history->created_at,true)!!}</td>
                                <td data-label="kode">{{empty($history->rule->game) ? '-': $history->rule->game->name}}</td>
                                <td data-label="kode">{!! consts($history->status)!!}</td>
                                <td data-label="Action" style="min-width:120px">
                                    <a href="{{route('dashboard.history.detail',$history->id)}}" class="btn btn-dark btn-sm  {{ ($history->status == 'failed') ? null : null }}"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">Maaf untuk saat ini data yang anda cari belum tersedia, silahkan melakukan konsultasi melalui menu yang tersedia.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $("#myLargeModalLabel").html("Riwayat Konsuktasi");
</script>
