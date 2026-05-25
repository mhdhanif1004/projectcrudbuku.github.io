@include('layout.header')

<div class="content">

    <div class="card">
        <h3>Buat Kategori</h3>

        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Kategori:</label>
                <input type="text" name="nama_kategori" placeholder="Masukkan nama kategori">
            </div>

            <button type="submit" class="tombol">Submit</button>
        </form>

    </div>

</div>

@include('layout.footer')