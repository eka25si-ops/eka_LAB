namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // 1. Tampilkan daftar pelanggan (Index)
    public function index()
    {
        $dataPelanggan = Pelanggan::all(); // Mengambil seluruh data dari tabel
        return view('admin.pelanggan.index', compact('dataPelanggan'));
    }

    // 2. Tampilkan form tambah (Create)
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    // 3. Simpan data baru (Store)
    public function store(Request $request)
    {
        // Jalankan validasi dan simpan data
        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    // 4. Tampilkan form edit (Edit)
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    // 5. Update data (Update)
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diubah!');
    }

    // 6. Hapus data (Destroy)
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus!');
    }
}
