<a href="{{ route('supplier.show', $supplier->supplier_id) }}" class="btn btn-info btn-sm">
    <i class="bi bi-eye"></i> Detail
</a>
<a href="{{ route('supplier.edit', $supplier->supplier_id) }}" class="btn btn-warning btn-sm">
    <i class="bi bi-pencil"></i> Edit
</a>
<form action="{{ route('supplier.destroy', $supplier->supplier_id) }}" method="POST" class="d-inline"
      onsubmit="return confirm('Yakin ingin menghapus data supplier ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
</form>