@props(['tabla' => null,'id'=>null])
<form action="{{ route($tabla.'.destroy', $id) }}" method="POST" style="display: inline-block;">

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
</form>
