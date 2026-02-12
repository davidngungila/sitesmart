@extends('layouts.app')

@section('title', 'All Projects - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">All Projects</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('projects.index') }}">Projects</a>
        <span>/</span>
        <span>All Projects</span>
    </nav>
</div>

<!-- Filter and Action Bar -->
<div class="card" style="margin-bottom: 1.5rem;">
    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; justify-content: space-between;">
        <div style="display: flex; gap: 1rem; flex-wrap: wrap; flex: 1;">
            <div style="flex: 1; min-width: 250px;">
                <input type="text" placeholder="Search projects..." id="project-search" style="width: 100%; padding: 0.625rem 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem;">
            </div>
            <select id="status-filter" style="padding: 0.625rem 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; min-width: 150px;">
                <option value="">All Status</option>
                <option value="ongoing">Ongoing</option>
                <option value="completed">Completed</option>
                <option value="delayed">Delayed</option>
                <option value="planning">Planning</option>
            </select>
            <select id="location-filter" style="padding: 0.625rem 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; min-width: 150px;">
                <option value="">All Locations</option>
                <option value="dar-es-salaam">Dar es Salaam</option>
                <option value="arusha">Arusha</option>
                <option value="dodoma">Dodoma</option>
                <option value="mwanza">Mwanza</option>
            </select>
        </div>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Project
        </a>
    </div>
</div>

<!-- Projects Grid/List View -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Projects (24)</h3>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" id="grid-view" style="padding: 0.5rem;">
                <i class="fas fa-th"></i>
            </button>
            <button class="btn btn-outline active" id="list-view" style="padding: 0.5rem;">
                <i class="fas fa-list"></i>
            </button>
            <button class="btn btn-outline" style="padding: 0.5rem;">
                <i class="fas fa-download"></i> Export
            </button>
        </div>
    </div>
    
    <!-- List View -->
    <div id="projects-list-view" class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Location</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Budget</th>
                    <th>Spent</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                RC
                            </div>
                            <div>
                                <div style="font-weight: 500;">Residential Complex A</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Project ID: PRJ-2026-001</div>
                            </div>
                        </div>
                    </td>
                    <td>Dar es Salaam</td>
                    <td>2026-01-15</td>
                    <td>2026-06-30</td>
                    <td>$500,000</td>
                    <td>$325,000</td>
                    <td><span class="badge badge-success">Ongoing</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 65%; height: 100%; background: var(--accent-color);"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">65%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem; color: #EF4444;" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #10B981, #059669); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                OB
                            </div>
                            <div>
                                <div style="font-weight: 500;">Office Building B</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Project ID: PRJ-2026-002</div>
                            </div>
                        </div>
                    </td>
                    <td>Arusha</td>
                    <td>2026-02-01</td>
                    <td>2026-08-15</td>
                    <td>$750,000</td>
                    <td>$337,500</td>
                    <td><span class="badge badge-success">Ongoing</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 45%; height: 100%; background: var(--accent-color);"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">45%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem; color: #EF4444;" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #6366F1, #4F46E5); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                WH
                            </div>
                            <div>
                                <div style="font-weight: 500;">Warehouse Complex</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Project ID: PRJ-2025-045</div>
                            </div>
                        </div>
                    </td>
                    <td>Dodoma</td>
                    <td>2025-11-10</td>
                    <td>2026-01-20</td>
                    <td>$300,000</td>
                    <td>$300,000</td>
                    <td><span class="badge badge-info">Completed</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 100%; height: 100%; background: #10B981;"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">100%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem; color: #EF4444;" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #EF4444, #DC2626); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                SH
                            </div>
                            <div>
                                <div style="font-weight: 500;">Shopping Mall</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Project ID: PRJ-2026-003</div>
                            </div>
                        </div>
                    </td>
                    <td>Mwanza</td>
                    <td>2026-01-20</td>
                    <td>2026-05-30</td>
                    <td>$1,200,000</td>
                    <td>$480,000</td>
                    <td><span class="badge badge-danger">Delayed</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 40%; height: 100%; background: #EF4444;"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">40%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem; color: #EF4444;" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #F59E0B, #D97706); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                AP
                            </div>
                            <div>
                                <div style="font-weight: 500;">Apartment Complex</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Project ID: PRJ-2026-004</div>
                            </div>
                        </div>
                    </td>
                    <td>Dar es Salaam</td>
                    <td>2026-02-10</td>
                    <td>2026-09-30</td>
                    <td>$950,000</td>
                    <td>$190,000</td>
                    <td><span class="badge badge-warning">Planning</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 20%; height: 100%; background: #F59E0B;"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">20%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem; color: #EF4444;" title="Delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div style="padding: 1rem; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
        <div style="color: var(--text-secondary); font-size: 0.875rem;">
            Showing 1 to 5 of 24 projects
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Previous</button>
            <button class="btn btn-primary" style="padding: 0.5rem 1rem;">1</button>
            <button class="btn btn-outline" style="padding: 0.5rem 1rem;">2</button>
            <button class="btn btn-outline" style="padding: 0.5rem 1rem;">3</button>
            <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Next</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.getElementById('project-search');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            // Implement search logic here
            console.log('Searching:', this.value);
        });
    }
    
    // Filter functionality
    const statusFilter = document.getElementById('status-filter');
    const locationFilter = document.getElementById('location-filter');
    
    if (statusFilter) {
        statusFilter.addEventListener('change', function() {
            console.log('Status filter:', this.value);
        });
    }
    
    if (locationFilter) {
        locationFilter.addEventListener('change', function() {
            console.log('Location filter:', this.value);
        });
    }
});
</script>
@endpush