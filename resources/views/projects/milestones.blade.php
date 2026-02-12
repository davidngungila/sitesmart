@extends('layouts.app')

@section('title', 'Project Milestones - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">Project Milestones</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('projects.index') }}">Projects</a>
        <span>/</span>
        <span>Milestones</span>
    </nav>
</div>

<!-- Project Selector -->
<div class="card" style="margin-bottom: 1.5rem;">
    <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; justify-content: space-between;">
        <div style="flex: 1; min-width: 250px;">
            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-primary);">Select Project</label>
            <select id="project-selector" class="form-input" style="width: 100%;">
                <option value="">All Projects</option>
                <option value="1" selected>Residential Complex A</option>
                <option value="2">Office Building B</option>
                <option value="3">Warehouse Complex</option>
            </select>
        </div>
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Milestone
        </button>
    </div>
</div>

<!-- Milestones Overview Cards -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;">
    <div class="card">
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 50px; height: 50px; border-radius: 0.5rem; background: linear-gradient(135deg, #10B981, #059669); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: var(--text-primary);">8</div>
                <div style="font-size: 0.875rem; color: var(--text-secondary);">Completed</div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 50px; height: 50px; border-radius: 0.5rem; background: linear-gradient(135deg, var(--accent-color), #EA580C); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                <i class="fas fa-clock"></i>
            </div>
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: var(--text-primary);">3</div>
                <div style="font-size: 0.875rem; color: var(--text-secondary);">In Progress</div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 50px; height: 50px; border-radius: 0.5rem; background: linear-gradient(135deg, #6366F1, #4F46E5); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                <i class="fas fa-hourglass-half"></i>
            </div>
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: var(--text-primary);">5</div>
                <div style="font-size: 0.875rem; color: var(--text-secondary);">Upcoming</div>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div style="display: flex; align-items: center; gap: 1rem;">
            <div style="width: 50px; height: 50px; border-radius: 0.5rem; background: linear-gradient(135deg, #EF4444, #DC2626); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: var(--text-primary);">1</div>
                <div style="font-size: 0.875rem; color: var(--text-secondary);">Delayed</div>
            </div>
        </div>
    </div>
</div>

<!-- Milestones List -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Milestones</h3>
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
                    <th>Milestone</th>
                    <th>Project</th>
                    <th>Target Date</th>
                    <th>Actual Date</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #10B981, #059669); display: flex; align-items: center; justify-content: center; color: white;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">Site Survey Complete</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Phase 1</div>
                            </div>
                        </div>
                    </td>
                    <td>Residential Complex A</td>
                    <td>2026-01-25</td>
                    <td>2026-01-23</td>
                    <td><span class="badge badge-success">Completed</span></td>
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
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #10B981, #059669); display: flex; align-items: center; justify-content: center; color: white;">
                                <i class="fas fa-check"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">Design Approval</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Phase 1</div>
                            </div>
                        </div>
                    </td>
                    <td>Residential Complex A</td>
                    <td>2026-02-05</td>
                    <td>2026-02-03</td>
                    <td><span class="badge badge-success">Completed</span></td>
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
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, var(--accent-color), #EA580C); display: flex; align-items: center; justify-content: center; color: white;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">Foundation Complete</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Phase 2</div>
                            </div>
                        </div>
                    </td>
                    <td>Residential Complex A</td>
                    <td>2026-03-15</td>
                    <td>-</td>
                    <td><span class="badge badge-warning">In Progress</span></td>
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
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #6366F1, #4F46E5); display: flex; align-items: center; justify-content: center; color: white;">
                                <i class="fas fa-hourglass-half"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">Structure Complete</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Phase 3</div>
                            </div>
                        </div>
                    </td>
                    <td>Residential Complex A</td>
                    <td>2026-05-10</td>
                    <td>-</td>
                    <td><span class="badge badge-info">Upcoming</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 0%; height: 100%; background: #6366F1;"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">0%</span>
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
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 40px; height: 40px; border-radius: 0.5rem; background: linear-gradient(135deg, #EF4444, #DC2626); display: flex; align-items: center; justify-content: center; color: white;">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div>
                                <div style="font-weight: 500;">Roofing Complete</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">Phase 3</div>
                            </div>
                        </div>
                    </td>
                    <td>Office Building B</td>
                    <td>2026-04-20</td>
                    <td>-</td>
                    <td><span class="badge badge-danger">Delayed</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                <div style="width: 30%; height: 100%; background: #EF4444;"></div>
                            </div>
                            <span style="font-size: 0.875rem; font-weight: 500;">30%</span>
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
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
.form-input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid var(--border-color);
    border-radius: 0.5rem;
    font-size: 1rem;
    transition: all 0.2s ease;
    font-family: inherit;
}

.form-input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(31, 58, 138, 0.1);
}
</style>
@endsection
