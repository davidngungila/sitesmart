@extends('layouts.app')

@section('title', 'Tasks - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">All Tasks</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('tasks.index') }}">Tasks</a>
        <span>/</span>
        <span>All Tasks</span>
    </nav>
</div>

<!-- Filter and Search Bar -->
<div class="card" style="margin-bottom: 1.5rem;">
    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
        <div style="flex: 1; min-width: 200px;">
            <input type="text" placeholder="Search tasks..." style="width: 100%; padding: 0.625rem; border: 1px solid var(--border-color); border-radius: 0.5rem;">
        </div>
        <select style="padding: 0.625rem; border: 1px solid var(--border-color); border-radius: 0.5rem;">
            <option>All Status</option>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Completed</option>
            <option>Delayed</option>
        </select>
        <select style="padding: 0.625rem; border: 1px solid var(--border-color); border-radius: 0.5rem;">
            <option>All Projects</option>
            <option>Residential Complex A</option>
            <option>Office Building B</option>
        </select>
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i> Create Task
        </button>
    </div>
</div>

<!-- Tasks Table -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Task List</h3>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" style="padding: 0.5rem;">
                <i class="fas fa-filter"></i> Filter
            </button>
            <button class="btn btn-outline" style="padding: 0.5rem;">
                <i class="fas fa-download"></i> Export
            </button>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Project</th>
                    <th>Assigned To</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Foundation Work</td>
                    <td>Residential Complex A</td>
                    <td>John Doe</td>
                    <td>2026-02-15</td>
                    <td><span class="badge badge-warning">In Progress</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 60%; height: 100%; background: var(--accent-color);"></div>
                            </div>
                            <span style="font-size: 0.875rem;">60%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Roofing Installation</td>
                    <td>Office Building B</td>
                    <td>Jane Smith</td>
                    <td>2026-02-20</td>
                    <td><span class="badge badge-info">Pending</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 0%; height: 100%; background: var(--accent-color);"></div>
                            </div>
                            <span style="font-size: 0.875rem;">0%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Electrical Wiring</td>
                    <td>Warehouse C</td>
                    <td>Mike Johnson</td>
                    <td>2026-02-10</td>
                    <td><span class="badge badge-danger">Delayed</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 30%; height: 100%; background: #EF4444;"></div>
                            </div>
                            <span style="font-size: 0.875rem;">30%</span>
                        </div>
                    </td>
                    <td>
                        <div style="display: flex; gap: 0.25rem;">
                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div style="padding: 1rem; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
        <div style="color: var(--text-secondary); font-size: 0.875rem;">
            Showing 1 to 3 of 15 entries
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Previous</button>
            <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Next</button>
        </div>
    </div>
</div>
@endsection
