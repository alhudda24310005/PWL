<a href="{{ route('barang.show', $barang->barang_id) }}" class="btn btn-info btn-sm">
    <i class="bi bi-eye"></i> Detail
</a>
<a href="{{ route('barang.edit', $barang->barang_id) }}" class="btn btn-warning btn-sm">
    <i class="bi bi-pencil"></i> Edit
</a>
<form action="{{ route('barang.destroy', $barang->barang_id) }}" method="POST" class="d-inline"
      onsubmit="return confirm('Yakin ingin menghapus data barang ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
</form>