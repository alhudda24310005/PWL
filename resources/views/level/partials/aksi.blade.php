<a href="{{ route('level.show', $level->level_id) }}" class="btn btn-info btn-sm">
    <i class="bi bi-eye"></i> Detail
</a>
<a href="{{ route('level.edit', $level->level_id) }}" class="btn btn-warning btn-sm">
    <i class="bi bi-pencil"></i> Edit
</a>
<form action="{{ route('level.destroy', $level->level_id) }}" method="POST" class="d-inline"
      onsubmit="return confirm('Yakin ingin menghapus data level ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
</form>