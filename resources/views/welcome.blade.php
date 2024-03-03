<tbody>
    @foreach ($karyawan as $karyawan)
        <tr>
            <td>{{ $karyawan->nama }}</td>
            <td>{{ $karyawan->jabatan }}</td>
            <td>{{ $karyawan->alamat }}</td>
            <td>{{ $karyawan->telepon }}</td>
            <td>{{ $karyawan->email }}</td>
            <a href="{{ route('karyawan.edit', $karyawan->nama) }}"
                class="btn bg-gradient-warning mt-3 ">Edit</a>
            <form action="{{ route('karyawan.destroy', $karyawan->nama) }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn bg-gradient-warning mt-3 "
                    onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')">Hapus</button>
            </form>

        </tr>
    @endforeach
</tbody>