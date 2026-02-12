@extends('layouts.app')

@section('title', 'Projects - SiteSmart')

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

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Project List</h3>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Project
        </a>
    </div>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Location</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Residential Complex A</td>
                    <td>Dar es Salaam</td>
                    <td>2026-01-15</td>
                    <td>2026-06-30</td>
                    <td>$500,000</td>
                    <td><span class="badge badge-success">Ongoing</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 65%; height: 100%; background: var(--accent-color);"></div>
                            </div>
                            <span style="font-size: 0.875rem;">65%</span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Office Building B</td>
                    <td>Arusha</td>
                    <td>2026-02-01</td>
                    <td>2026-08-15</td>
                    <td>$750,000</td>
                    <td><span class="badge badge-success">Ongoing</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 45%; height: 100%; background: var(--accent-color);"></div>
                            </div>
                            <span style="font-size: 0.875rem;">45%</span>
                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
