<script src="{{url('/admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{url('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{url('/admin/dist/js/adminlte.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{url('/admin/dist/js/demo.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{url('/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{url('/admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{url('/admin/plugins/sparklines/sparkline.js')}}"></script>

<!-- JQVMap -->
<script src="{{url('/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<!-- jQuery Knob Chart -->
<script src="{{url('/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->
<script src="{{url('/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->
<script src="{{url('/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->
<script src="{{url('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/admin/dist/js/pages/dashboard.js')}}"></script>

<!-- Menangani Pilihan Obat, Hapus Semua, dan Hidden Input -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const obatSelect = document.getElementById('obat-select');
    const selectedObatsList = document.getElementById('selected-obats-list');
    const obatIdsContainer = document.getElementById('obat-ids-container');
    const clearAllBtn = document.getElementById('clear-all-obats');

    if (!obatSelect || !selectedObatsList || !obatIdsContainer || !clearAllBtn) {
        // Kalau salah satu elemen tidak ada, tidak usah jalanin script ini
        return;
    }

    const selectedObats = [];
    const BASE_PRICE = 150000; // Base pemeriksaan harga

    // === Fungsi saat pilih obat ===
    obatSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const obatId = selectedOption.value;
        const obatName = selectedOption.getAttribute('data-nama');
        const obatPrice = parseInt(selectedOption.getAttribute('data-harga'));

        if (!obatId) return; // Kalau belum pilih, jangan apa-apa

        // Cek supaya tidak duplicate
        if (!selectedObats.some(obat => obat.id === obatId)) {
            selectedObats.push({
                id: obatId,
                name: obatName,
                price: obatPrice
            });
            updateSelectedObatsList();
            updateTotalHarga();
        }

        // Reset select setelah pilih
        this.value = '';
    });

    clearAllBtn.addEventListener('click', function() {
        selectedObats.length = 0;
        updateSelectedObatsList();
        updateTotalHarga();
    });

    function updateSelectedObatsList() {
        selectedObatsList.innerHTML = '';
        obatIdsContainer.innerHTML = '';

        if (selectedObats.length === 0) {
            document.getElementById('selected-obats-container').style.display = 'none';
            clearAllBtn.style.display = 'none';
            return;
        }

        document.getElementById('selected-obats-container').style.display = 'block';
        clearAllBtn.style.display = 'block';

        selectedObats.forEach(obat => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.innerHTML = `
                ${obat.name} - Rp${obat.price.toLocaleString('id-ID')}
                <button type="button" class="btn btn-sm text-danger" data-id="${obat.id}">
                    <i class="fas fa-times"></i>
                </button>
            `;

            const removeBtn = li.querySelector('button');
            removeBtn.addEventListener('click', function() {
                const obatId = this.getAttribute('data-id');
                const index = selectedObats.findIndex(item => item.id === obatId);
                if (index !== -1) {
                    selectedObats.splice(index, 1);
                    updateSelectedObatsList();
                    updateTotalHarga();
                }
            });

            selectedObatsList.appendChild(li);

            // Hidden input untuk form
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'obat_ids[]';
            hiddenInput.value = obat.id;
            obatIdsContainer.appendChild(hiddenInput);
        });
    }

    function updateTotalHarga() {
        let medicinesTotal = selectedObats.reduce((sum, obat) => sum + (obat.price || 0), 0);
        let total = BASE_PRICE + medicinesTotal;
        document.getElementById('biaya_periksa_display').value = formatRupiah(total);
        document.getElementById('biaya_periksa_value').value = total;
    }

    function formatRupiah(angka) {
        return 'Rp ' + angka.toLocaleString('id-ID');
    }

    // Inisialisasi awal harga Rp150.000
    updateTotalHarga();
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const obatSelect = document.getElementById('obat-select');
    const selectedObatsList = document.getElementById('selected-obats-list');
    const obatIdsContainer = document.getElementById('obat-ids-container');
    const clearAllBtn = document.getElementById('clear-all-obats');

    // Cek kalau elemen tidak ada (misal di halaman register), stop script
    if (!obatSelect || !selectedObatsList || !obatIdsContainer || !clearAllBtn) {
        return;
    }

    const selectedObats = [];
    const BASE_PRICE = 150000;

    // --- Load existing list (kalau ada) ---
    document.querySelectorAll('#selected-obats-list li').forEach(li => {
        const button = li.querySelector('button[data-id]');
        if (button) {
            const obatId = button.getAttribute('data-id');
            const name = li.getAttribute('data-nama') || '';
            const kemasan = li.getAttribute('data-kemasan') || '';
            const price = parseInt(li.getAttribute('data-harga')) || 0;

            selectedObats.push({
                id: obatId,
                name: name,
                kemasan: kemasan,
                price: price
            });
        }
    });

    if (selectedObats.length > 0) {
        document.getElementById('selected-obats-container').style.display = 'block';
        clearAllBtn.style.display = 'block';
        updateTotalHarga();
    }

    // --- Event pilih obat ---
    obatSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const obatId = selectedOption.value;
        const obatName = selectedOption.getAttribute('data-nama');
        const obatKemasan = selectedOption.getAttribute('data-kemasan') || '';
        const obatPrice = parseInt(selectedOption.getAttribute('data-harga'));

        if (!obatId) return;

        if (!selectedObats.some(obat => obat.id === obatId)) {
            selectedObats.push({
                id: obatId,
                name: obatName,
                kemasan: obatKemasan,
                price: obatPrice
            });
            updateSelectedObatsList();
            updateTotalHarga();
        }

        this.value = '';
    });

    // --- Event hapus 1 obat ---
    selectedObatsList.addEventListener('click', function(e) {
        const closeButton = e.target.closest('button[data-id]');
        if (closeButton) {
            const obatId = closeButton.getAttribute('data-id');
            const index = selectedObats.findIndex(item => item.id === obatId);
            if (index !== -1) {
                selectedObats.splice(index, 1);
                updateSelectedObatsList();
                updateTotalHarga();
            }
        }
    });

    // --- Event hapus semua obat ---
    clearAllBtn.addEventListener('click', function() {
        selectedObats.length = 0;
        updateSelectedObatsList();
        updateTotalHarga();
    });

    function updateSelectedObatsList() {
        selectedObatsList.innerHTML = '';
        obatIdsContainer.innerHTML = '';

        if (selectedObats.length === 0) {
            document.getElementById('selected-obats-container').style.display = 'none';
            clearAllBtn.style.display = 'none';
            return;
        }

        document.getElementById('selected-obats-container').style.display = 'block';
        clearAllBtn.style.display = 'block';

        selectedObats.forEach(obat => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.setAttribute('data-nama', obat.name);
            li.setAttribute('data-kemasan', obat.kemasan);
            li.setAttribute('data-harga', obat.price);

            li.innerHTML = `
                ${obat.name} - ${obat.kemasan} - Rp ${obat.price.toLocaleString('id-ID')}
                <button type="button" class="btn btn-sm text-danger ml-2" data-id="${obat.id}">
                    <i class="fas fa-times"></i>
                </button>
            `;

            selectedObatsList.appendChild(li);

            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'obat_ids[]';
            hiddenInput.value = obat.id;
            obatIdsContainer.appendChild(hiddenInput);
        });
    }

    function updateTotalHarga() {
        let medicinesTotal = selectedObats.reduce((sum, obat) => sum + (obat.price || 0), 0);
        let total = BASE_PRICE + medicinesTotal;
        document.getElementById('biaya_periksa_display').value = formatRupiah(total);
        document.getElementById('biaya_periksa_value').value = total;
    }

    function formatRupiah(angka) {
        return 'Rp ' + angka.toLocaleString('id-ID');
    }

    updateTotalHarga();
});

</script>
