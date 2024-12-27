// File: superadminDashboard.js
import Chart from 'chart.js/auto';
mix.js('resources/js/superadminDashboard.js', 'public/js');

console.log('superadminDashboard.js loaded');

document.addEventListener('DOMContentLoaded', function () {
    // Ambil elemen canvas dengan ID yang sesuai
    var ctxFactory = document.getElementById('factory').getContext('2d');
    var ctxMachinePieChart = document.getElementById('machinePieChart').getContext('2d');
    var ctxFactory1 = document.getElementById('machinePieChartforFactory1').getContext('2d');
    var ctxFactory2 = document.getElementById('machinePieChartforFactory2').getContext('2d');

    // Chart untuk factory
    new Chart(ctxFactory, {
        type: 'pie',
        data: {
            labels: factoriesByLocation.map(item => item.location),
            datasets: [{
                label: 'Total Factories',
                data: factoriesByLocation.map(item => item.count),
                backgroundColor: ['#A3B9C7', '#C8D8E4', '#D1E6F0', '#E0F1F9'],
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
                            return `${tooltipItem.label}: ${tooltipItem.raw} Factories`;
                        }
                    }
                }
            }
        }
    });

    // Chart untuk machine pie chart
    new Chart(ctxMachinePieChart, {
        type: 'pie',
        data: {
            labels: machinesByLocation.map(item => item.location),
            datasets: [{
                label: 'Total Machines',
                data: machinesByLocation.map(item => item.count),
                backgroundColor: ['#A3D2CA', '#C9D6B2', '#E4D1A5', '#D9B2A0'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    title: function() {
                        return `Total Machines: ${machinesByLocation.reduce((acc, curr) => acc + curr.count, 0)}`;
                    },
                    callbacks: {
                        label: function(tooltipItem) {
                            return `${tooltipItem.label}: ${tooltipItem.raw} Machines`;
                        }
                    }
                }
            }
        }
    });

    // Chart untuk mesin Factory 1
    new Chart(ctxFactory1, {
        type: 'pie',
        data: {
            labels: machineStatusesForFactory1.map(item => item.status),
            datasets: [{
                label: 'Machine Status',
                data: machineStatusesForFactory1.map(item => item.count),
                backgroundColor: ['#D8E2DC', '#FFE156', '#F28D35', '#6A4C93'],
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
                            return `${tooltipItem.label}: ${tooltipItem.raw} Machines`;
                        }
                    }
                }
            }
        }
    });

    // Chart untuk mesin Factory 2
    new Chart(ctxFactory2, {
        type: 'pie',
        data: {
            labels: machineStatusesForFactory2.map(item => item.status),
            datasets: [{
                label: 'Machine Status',
                data: machineStatusesForFactory2.map(item => item.count),
                backgroundColor: ['#A7C7E7', '#F5B7B1', '#E1D5E7', '#B2BABB'],
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
                            return `${tooltipItem.label}: ${tooltipItem.raw} Machines`;
                        }
                    }
                }
            }
        }
    });
});
