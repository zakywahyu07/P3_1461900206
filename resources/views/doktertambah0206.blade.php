<form action="{{ route ('dokter0206.store')}}" method="post">
    @csrf
    Id: <input type="text" name="id">
    Nama: <input type="text" name="Nama">
    Jabatan: <input type="text" name="Jabatan">
    <button type="submit">simpan</button>
</form>