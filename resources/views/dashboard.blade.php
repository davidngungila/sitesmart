@extends('layouts.app')

@section('title', 'Dashboard - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <span>Dashboard</span>
    </nav>
</div>

<!-- KPI Cards -->
<div class="kpi-grid">
    <div class="kpi-card">
        <div class="kpi-card-header">
            <div>
                <p class="kpi-label">Total Projects</p>
                <h2 class="kpi-value">24</h2>
            </div>
            <div class="kpi-icon primary">
                <i class="fas fa-folder-open"></i>
            </div>
        </div>
        <div class="kpi-change positive">
            <i class="fas fa-arrow-up"></i> +3 this month
        </div>
    </div>
    
    <div class="kpi-card accent">
        <div class="kpi-card-header">
            <div>
                <p class="kpi-label">Ongoing Projects</p>
                <h2 class="kpi-value">18</h2>
            </div>
            <div class="kpi-icon accent">
                <i class="fas fa-hard-hat"></i>
            </div>
        </div>
        <div class="kpi-change positive">
            <i class="fas fa-arrow-up"></i> 75% active
        </div>
    </div>
    
    <div class="kpi-card">
        <div class="kpi-card-header">
            <div>
                <p class="kpi-label">Total Budget</p>
                <h2 class="kpi-value">$2.4M</h2>
            </div>
            <div class="kpi-icon primary">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
        <div class="kpi-change positive">
            <i class="fas fa-arrow-up"></i> +12% vs last month
        </div>
    </div>
    
    <div class="kpi-card accent">
        <div class="kpi-card-header">
            <div>
                <p class="kpi-label">Total Expenses</p>
                <h2 class="kpi-value">$1.8M</h2>
            </div>
            <div class="kpi-icon accent">
                <i class="fas fa-receipt"></i>
            </div>
        </div>
        <div class="kpi-change">
            <i class="fas fa-minus"></i> 75% of budget
        </div>
    </div>
    
    <div class="kpi-card">
        <div class="kpi-card-header">
            <div>
                <p class="kpi-label">Remaining Budget</p>
                <h2 class="kpi-value">$600K</h2>
            </div>
            <div class="kpi-icon primary">
                <i class="fas fa-wallet"></i>
            </div>
        </div>
        <div class="kpi-change positive">
            <i class="fas fa-check-circle"></i> On track
        </div>
    </div>
    
    <div class="kpi-card accent">
        <div class="kpi-card-header">
            <div>
                <p class="kpi-label">Active Workers</p>
                <h2 class="kpi-value">156</h2>
            </div>
            <div class="kpi-icon accent">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="kpi-change positive">
            <i class="fas fa-arrow-up"></i> +8 this week
        </div>
    </div>
</div>

<!-- Charts Row -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
    <!-- Project Progress Chart -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Project Progress Overview</h3>
        </div>
        <canvas id="projectProgressChart" style="max-height: 300px;"></canvas>
    </div>
    
    <!-- Budget vs Actual Chart -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Budget vs Actual Cost</h3>
        </div>
        <canvas id="budgetChart" style="max-height: 300px;"></canvas>
    </div>
</div>

<!-- Recent Activity & Quick Actions -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
    <!-- Recent Projects -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Projects</h3>
            <a href="{{ route('projects.index') }}" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Status</th>
                        <th>Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Residential Complex A</td>
                        <td><span class="badge badge-success">Ongoing</span></td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 65%; height: 100%; background: var(--accent-color);"></div>
                                </div>
                                <span style="font-size: 0.875rem;">65%</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Office Building B</td>
                        <td><span class="badge badge-success">Ongoing</span></td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 45%; height: 100%; background: var(--accent-color);"></div>
                                </div>
                                <span style="font-size: 0.875rem;">45%</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Warehouse C</td>
                        <td><span class="badge badge-info">Completed</span></td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 100%; height: 100%; background: #10B981;"></div>
                                </div>
                                <span style="font-size: 0.875rem;">100%</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Recent Tasks -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Tasks</h3>
            <a href="{{ route('tasks.index') }}" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">View All</a>
        </div>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            <div style="padding: 1rem; background: var(--bg-color); border-radius: 0.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                    <span style="font-weight: 500;">Foundation Work</span>
                    <span class="badge badge-warning">In Progress</span>
                </div>
                <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.5rem;">Residential Complex A</p>
                <div style="font-size: 0.75rem; color: var(--text-secondary);">
                    <i class="fas fa-calendar"></i> Due: Feb 15, 2026
                </div>
            </div>
            <div style="padding: 1rem; background: var(--bg-color); border-radius: 0.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                    <span style="font-weight: 500;">Roofing Installation</span>
                    <span class="badge badge-info">Pending</span>
                </div>
                <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.5rem;">Office Building B</p>
                <div style="font-size: 0.75rem; color: var(--text-secondary);">
                    <i class="fas fa-calendar"></i> Due: Feb 20, 2026
                </div>
            </div>
            <div style="padding: 1rem; background: var(--bg-color); border-radius: 0.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.5rem;">
                    <span style="font-weight: 500;">Electrical Wiring</span>
                    <span class="badge badge-danger">Delayed</span>
                </div>
                <p style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.5rem;">Warehouse C</p>
                <div style="font-size: 0.75rem; color: var(--text-secondary);">
                    <i class="fas fa-calendar"></i> Due: Feb 10, 2026
                </div>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quick Actions</h3>
        </div>
        <div style="display: flex; flex-direction: column; gap: 0.75rem;">
            <a href="{{ route('projects.create') }}" class="btn btn-primary" style="width: 100%; justify-content: center;">
                <i class="fas fa-plus"></i> Create New Project
            </a>
            <a href="{{ route('tasks.index') }}" class="btn btn-accent" style="width: 100%; justify-content: center;">
                <i class="fas fa-tasks"></i> Add New Task
            </a>
            <a href="{{ route('finance.expenses') }}" class="btn btn-outline" style="width: 100%; justify-content: center;">
                <i class="fas fa-receipt"></i> Record Expense
            </a>
            <a href="{{ route('materials.index') }}" class="btn btn-outline" style="width: 100%; justify-content: center;">
                <i class="fas fa-boxes"></i> Manage Materials
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Project Progress Chart
    const progressCtx = document.getElementById('projectProgressChart');
    if (progressCtx) {
        new Chart(progressCtx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'Ongoing', 'Delayed'],
                datasets: [{
                    data: [6, 18, 0],
                    backgroundColor: [
                        '#10B981',
                        '#F97316',
                        '#EF4444'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    }
    
    // Budget vs Actual Chart
    const budgetCtx = document.getElementById('budgetChart');
    if (budgetCtx) {
        new Chart(budgetCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Budget',
                        data: [400000, 400000, 400000, 400000, 400000, 400000],
                        backgroundColor: '#1F3A8A'
                    },
                    {
                        label: 'Actual',
                        data: [350000, 380000, 320000, 360000, 340000, 300000],
                        backgroundColor: '#F97316'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '$' + (value / 1000) + 'K';
                            }
                        }
                    }
                }
            }
        });
    }
    
    // Global Search (Ctrl+K)
    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            document.getElementById('global-search')?.focus();
        }
    });
});
</script>
@endpush
