@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Akses</h2>
    <p>Halo, admin!</p>
    <div class="mb-3">
        <label for="nis" class="form-label">Masukkan NIS</label>
        <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS">
        <button class="btn btn-success mt-2" onclick="generateAccessCode()">Filter</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Kode Akses</th>
            </tr>
        </thead>
        <tbody id="accessTableBody">
            <!-- Data akan muncul di sini -->
        </tbody>
    </table>

    <button class="btn btn-warning" onclick="downloadCSV()">Download CSV</button>
</div>

<script>
function generateAccessCode() {
    let nis = document.getElementById('nis').value;
    if (nis === '') {
        alert('Masukkan NIS terlebih dahulu!');
        return;
    }

    let accessCode = 'AKS-' + Math.random().toString(36).substr(2, 8).toUpperCase();
    let tableBody = document.getElementById('accessTableBody');
    let newRow = `<tr><td>${nis}</td><td>${accessCode}</td></tr>`;
    tableBody.innerHTML += newRow;
}

function downloadCSV() {
    let table = document.getElementById('accessTableBody');
    let csvContent = "NIS,Kode Akses\n";
    for (let row of table.rows) {
        let nis = row.cells[0].innerText;
        let code = row.cells[1].innerText;
        csvContent += `${nis},${code}\n`;
    }

    let blob = new Blob([csvContent], {
        type: 'text/csv'
    });
    let link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'kode_akses.csv';
    link.click();
}
</script>
@endsection