@role('superadmin')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info bg-gradient-primary"
                style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2)">
                <div class="inner">
                    <h3>{{ $user }}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ route('admin.user.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-infobg-gradient-info"
                style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <div class="inner">
                    <h3>{{ $role }}</h3>
                    <p>Total Role</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-user-tag"></i>
                </div>
                <a href="{{ route('admin.role.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">


        {{-- <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $category }}</h3>
                    <p>Total Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list-alt"></i>
                </div>
                <a href="{{ route('admin.category.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $product }}</h3>
                    <p>Total Products</p>
                </div>
                <div class="icon">
                    <i class="fas fas fa-th"></i>
                </div>
                <a href="{{ route('admin.product.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $collection }}</h3>
                    <p>Total Collections</p>
                </div>
                <div class="icon">
                    <i class="fas fas fa-file-pdf"></i>
                </div>
                <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div> --}}

        <div class="col-lg-4 col-md-6 col-12"> <!-- Mengurangi ukuran kolom -->
            <div class="small-box bg-gray-200 bg-gradient-to-r from-gray-300 to-gray-400"
                style="padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="inner">
                    <div class="row align-items-center"
                        style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <h3 style="margin: 0 10px 0 15px; font-weight: bold; font-size: 20px;">Total Machines</h3>
                        <span
                            style="font-size: 20px; font-weight: bold; color: #fff; background: #007bff; padding: 5px 10px; border-radius: 5px;">
                            {{ $totalFactories }}
                        </span>
                    </div>
                    <p style="font-size: 14px; margin-bottom: 10px; margin-left: 10px;">Machines by Location</p>
                    <canvas id="factory" style="width: 250px; height: 150px; margin: auto; display: block;"></canvas>
                </div>
                <a href="{{ route('admin.factories.index') }}" class="small-box-footer"
                    style="font-size: 14px; padding: 5px 0;">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 col-12"> <!-- Mengurangi ukuran kolom -->
            <div class="small-box bg-info"
                style="padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="inner">
                    <div class="row align-items-center"
                        style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <h3 style="margin: 0 10px 0 15px; font-weight: bold; font-size: 20px;">Total Machines</h3>
                        <span
                            style="font-size: 20px; font-weight: bold; color: #fff; background: #007bff; padding: 5px 10px; border-radius: 5px;">
                            {{ $totalMachines }}
                        </span>
                    </div>
                    <p style="font-size: 14px; margin-bottom: 10px; margin-left: 10px;">Machines by Location</p>
                    <canvas id="machinePieChart"
                        style="width: 250px; height: 150px; margin: auto; display: block;"></canvas>
                </div>
                <a href="{{ route('admin.machine.index') }}" class="small-box-footer"
                    style="font-size: 14px; padding: 5px 0;">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-gray-200 bg-gradient-to-r from-gray-300 to-gray-400"
                style="padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="inner">
                    <!-- Baris total machines -->
                    <div class="row align-items-center"
                        style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <h3 style="margin: 0 10px 0 15px; font-weight: bold; font-size: 20px;">Total Machines (Jawa Tengah)
                        </h3>
                        <span
                            style="font-size: 20px; font-weight: bold; color: #fff; background: #007bff; padding: 5px 10px; border-radius: 5px;">
                            {{ $totalMachinesForFactory1 }}
                        </span>
                    </div>
                    <!-- Informasi tambahan -->
                    <p style="font-size: 14px; margin-bottom: 10px; margin-left: 10px;">Status Machines (Jawa Tengah)</p>
                    <!-- Pie chart -->
                    <canvas id="machinePieChartforFactory1"
                        style="width: 250px; height: 150px; margin: auto; display: block;"></canvas>
                </div>
                <a href="{{ route('admin.machine.index') }}" class="small-box-footer"
                    style="font-size: 14px; padding: 5px 0;">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-info"
                style="padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="inner">
                    <!-- Baris total machines -->
                    <div class="row align-items-center"
                        style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <h3 style="margin: 0 10px 0 15px; font-weight: bold; font-size: 20px;">Total Machines (Jawa Barat)
                        </h3>
                        <span
                            style="font-size: 20px; font-weight: bold; color: #fff; background: #007bff; padding: 5px 10px; border-radius: 5px;">
                            {{ $totalMachinesForFactory2 }}
                        </span>
                    </div>
                    <!-- Informasi tambahan -->
                    <p style="font-size: 14px; margin-bottom: 10px; margin-left: 10px;">Status Machines (Jawa Barat)</p>
                    <!-- Pie chart -->
                    <canvas id="machinePieChartforFactory2"
                        style="width: 250px; height: 150px; margin: auto; display: block;"></canvas>
                </div>
                <a href="{{ route('admin.machine.index') }}" class="small-box-footer"
                    style="font-size: 14px; padding: 5px 0;">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>
@endrole
@role('adminA')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-info"
                style="padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="inner">
                    <div class="row align-items-center"
                        style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <h3 style="margin: 0 10px 0 15px; font-weight: bold; font-size: 20px;">Total Machines</h3>
                        <span
                            style="font-size: 20px; font-weight: bold; color: #fff; background: #007bff; padding: 5px 10px; border-radius: 5px;">
                            {{ $totalMachinesForFactory1 }}
                        </span>
                    </div>
                    <p style="font-size: 14px; margin-bottom: 10px; margin-left: 10px;">Machines by Status</p>
                    <canvas id="machinePieChart"
                        style="width: 250px; height: 150px; margin: auto; display: block;"></canvas>
                </div>
                <a href="{{ route('admin.machine.index') }}" class="small-box-footer"
                    style="font-size: 14px; padding: 5px 0;">
                    View <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-info"
                style="padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="inner">
                    <div class="row align-items-center"
                        style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <p style="font-size: 14px; margin-bottom: 10px; margin-left: 10px;">Machines Created and Updated by
                            Date</p>
                        <canvas id="machineCreatedUpdatedAtChart"
                            style="width: 250px; height: 150px; margin: auto; display: block;"></canvas>

                        <a href="{{ route('admin.machine.index') }}" class="small-box-footer"
                            style="font-size: 14px; padding: 5px 0;">
                            View <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endrole

    @if (auth()->user()->role === 'superadmin')
        <!-- Skrip untuk superadmin -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('factory').getContext('2d');
            var machinePieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: @json($factoriesByLocation->pluck('location')), // Ambil label lokasi
                    datasets: [{
                        label: 'Total Factories',
                        data: @json($factoriesByLocation->pluck('count')), // Ambil jumlah factory per lokasi
                        backgroundColor: ['#A3B9C7', '#C8D8E4', '#D1E6F0',
                            '#E0F1F9'
                        ], // Warna pastel untuk pie chart
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + ' Factories';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('machinePieChart').getContext('2d');
            var machinePieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: @json($machinesByLocation->pluck('location')), // Lokasi mesin yang benar
                    datasets: [{
                        label: 'Total Machines',
                        data: @json($machinesByLocation->pluck('count')), // Jumlah mesin berdasarkan lokasi
                        backgroundColor: ['#A3D2CA', '#C9D6B2', '#E4D1A5',
                            '#D9B2A0'
                        ], // Warna pastel netral untuk pie chart
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            title: function(tooltipItems) {
                                // Tampilkan jumlah total mesin di atas nama lokasi
                                return `Total Machines: ${totalMachines}`;
                            },
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + ' Machines';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('machinePieChartforFactory1').getContext('2d');
            var machinePieChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($machineStatusesForFactory1->pluck('status')), // Status mesin
                    datasets: [{
                        label: 'Machine Status',
                        data: @json($machineStatusesForFactory1->pluck('count')), // Jumlah mesin berdasarkan status
                        backgroundColor: ['#FFE156', '#F28D35',
                            '#6A4C93'
                        ], // Warna pastel netral untuk pie chart
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + ' Machines';
                                }
                            }
                        }
                    }
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('machinePieChartforFactory2').getContext('2d');
            var machinePieChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($machineStatusesForFactory2->pluck('status')), // Status mesin
                    datasets: [{
                        label: 'Machine Status',
                        data: @json($machineStatusesForFactory2->pluck('count')), // Jumlah mesin berdasarkan status
                        backgroundColor: ['#A7C7E7', '#F5B7B1', '#E1D5E7',
                            '#B2BABB'
                        ], // Warna pastel kalem dan netral
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + ' Machines';
                                }
                            }
                        }
                    }
                }
            });
        </script>
    @endif

    @if (auth()->user()->role === 'adminA')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            var ctx = document.getElementById('machinePieChart').getContext('2d');
            var machinePieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: @json($machineStatusesForFactory1->pluck('status')), // Status mesin yang benar
                    datasets: [{
                        label: 'Total Machines',
                        data: @json($machineStatusesForFactory1->pluck('count')), // Jumlah mesin berdasarkan status
                        backgroundColor: ['#A3D2CA', '#C9D6B2', '#E4D1A5',
                            '#D9B2A0'
                        ], // Warna pastel netral untuk pie chart
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            title: function(tooltipItems) {
                                return `Total Machines: ${tooltipItems[0].raw}`; // Tampilkan jumlah total mesin di atas tooltip
                            },
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + ' Machines';
                                }
                            }
                        }
                    }
                }
            });
        </script>
        <script>
            var ctx = document.getElementById('machineCreatedUpdatedAtChart').getContext('2d');
            var machineCreatedUpdatedAtChart = new Chart(ctx, {
                type: 'line', // Tipe grafik bisa disesuaikan, menggunakan line chart di sini
                data: {
                    labels: @json($machineCreatedAtData->pluck('date')), // Tanggal pembuatan mesin
                    datasets: [{
                            label: 'Total Machines Created',
                            data: @json($machineCreatedAtData->pluck('count')), // Jumlah mesin yang dibuat pada setiap tanggal
                            backgroundColor: 'rgba(0, 123, 255, 0.2)', // Warna latar belakang untuk area grafik
                            borderColor: 'rgba(0, 123, 255, 1)', // Warna garis grafik
                            borderWidth: 1,
                            fill: true, // Mengisi area di bawah grafik
                        },
                        {
                            label: 'Total Machines Updated',
                            data: @json($machineUpdatedAtData->pluck('count')), // Jumlah mesin yang diperbarui pada setiap tanggal
                            backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna latar belakang untuk area grafik
                            borderColor: 'rgba(255, 99, 132, 1)', // Warna garis grafik
                            borderWidth: 1,
                            fill: true, // Mengisi area di bawah grafik
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Machine Count'
                            },
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + ' Machines';
                                }
                            }
                        }
                    }
                }
            });
        </script>
    @endif
