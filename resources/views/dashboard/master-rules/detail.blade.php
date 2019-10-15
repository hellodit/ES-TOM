<table class="detail">
    <tr>
        <th style="min-width:150px">Nama Aturan </th>
        <th>{{$data->name}}</th>
    </tr>
    <tr>
        <td>Nama Permainan</td>
        <td>{{$data->gameparams[0]->game[0]->name}}</td>
    </tr>
    <tr>
        <td>Aturan Permainan</td>
        <td>
            <ol>
                @foreach ($data->gameparams as $item)
                    @foreach ($item->parameter as $parameter)
                            <li>{{strip_tags($parameter->name)}}</li>
                    @endforeach
                @endforeach
            </ol>
        </td>
    </tr>
</table>
<script type="text/javascript">
        $("#myLargeModalLabel").html('{{$data->name}}');
</script>
<style>
    .detail {
        border: #dddddd;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    .detail td, .detail th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    /* .detail tr:nth-child(even) {
      background-color: #dddddd;
    } */
</style>
