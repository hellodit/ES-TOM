<table class="detail">
    <tr>
        <th style="min-width:150px">Nama Aturan </th>
        <th>{{$data->name}}</th>
    </tr>
    <tr>
        <td>Nama Permainan</td>
        <td>{{$data->game->name}}</td>
    </tr>
    <tr>
        <td>Aturan Permainan</td>
        <td>
            <ol>
                @foreach ($data->params as $item)
                    <li>{{strip_tags($item->name)}}</li>
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
