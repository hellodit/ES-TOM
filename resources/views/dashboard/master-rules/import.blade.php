<form action="{{route('dashboard.rules.import')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="custom-file">
        <input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
    </div>

    <div class="form-group pt-2">
        <input type="submit" class="btn btn-primary" value="submit">
    </div>
</form>
<script type="text/javascript">
        $("#myLargeModalLabel").html('Import');
</script>
<style>

</style>
