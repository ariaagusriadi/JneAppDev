<form action="{{ $url }}" class="d-inline" method="POST" onsubmit="return confirm('yakin menghapus data ini ?')">
  @csrf
  @method("delete")
  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
