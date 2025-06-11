@extends('layouts.app')

@section('title', 'SmartEnergy Dashboard')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Dashboard Konsumsi Energi</h1>
    
    <div class="row">
        <!-- Box Statistik -->
        <div class="col-md-4">
            <div class="card bg-info text-white">
                <div class="card-body text-center">
                    <h5>Total Konsumsi Energi</h5>
                    <h2 id="totalEnergy">0 kWh</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-dark">
                <div class="card-body text-center">
                    <h5>Pengguna Terdaftar</h5>
                    <h2 id="userCount">0</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h5>Energi Bersih Terpakai</h5>
                    <h2 id="cleanEnergy">0%</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Konsumsi Energi -->
    <div class="mt-4">
        <canvas id="energyChart"></canvas>
    </div>
</div>

@endsection
@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Data contoh (bisa diganti dengan data dari database)
    let energyData = [120, 140, 135, 150, 170, 180, 190];
    let months = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul"];

    let ctx = document.getElementById('energyChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: "Konsumsi Energi (kWh)",
                data: energyData,
                borderColor: "#007bff",
                backgroundColor: "rgba(0, 123, 255, 0.2)"
            }]
        }
    });
});
</script>
@endsection
