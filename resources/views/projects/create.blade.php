@extends('layouts.app')

@section('title', 'Create Project - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">Create New Project</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('projects.index') }}">Projects</a>
        <span>/</span>
        <span>Create Project</span>
    </nav>
</div>

<form method="POST" action="#" id="create-project-form">
    @csrf
    
    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1.5rem;">
        <!-- Main Form -->
        <div>
            <!-- Basic Information -->
            <div class="card" style="margin-bottom: 1.5rem;">
                <div class="card-header">
                    <h3 class="card-title">Basic Information</h3>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div class="form-group">
                        <label class="form-label" for="project_name">Project Name <span style="color: #EF4444;">*</span></label>
                        <input type="text" id="project_name" name="project_name" class="form-input" placeholder="Enter project name" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="project_code">Project Code</label>
                        <input type="text" id="project_code" name="project_code" class="form-input" placeholder="Auto-generated or enter custom code">
                        <small style="color: var(--text-secondary); font-size: 0.875rem;">Leave empty for auto-generation</small>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="description">Description</label>
                        <textarea id="description" name="description" class="form-input" rows="4" placeholder="Enter project description"></textarea>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label class="form-label" for="location">Location <span style="color: #EF4444;">*</span></label>
                            <input type="text" id="location" name="location" class="form-input" placeholder="Enter project location" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="city">City</label>
                            <select id="city" name="city" class="form-input">
                                <option value="">Select City</option>
                                <option value="dar-es-salaam">Dar es Salaam</option>
                                <option value="arusha">Arusha</option>
                                <option value="dodoma">Dodoma</option>
                                <option value="mwanza">Mwanza</option>
                                <option value="tanga">Tanga</option>
                                <option value="zanzibar">Zanzibar</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Timeline -->
            <div class="card" style="margin-bottom: 1.5rem;">
                <div class="card-header">
                    <h3 class="card-title">Timeline</h3>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label" for="start_date">Start Date <span style="color: #EF4444;">*</span></label>
                        <input type="date" id="start_date" name="start_date" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="end_date">End Date <span style="color: #EF4444;">*</span></label>
                        <input type="date" id="end_date" name="end_date" class="form-input" required>
                    </div>
                </div>
            </div>
            
            <!-- Budget Information -->
            <div class="card" style="margin-bottom: 1.5rem;">
                <div class="card-header">
                    <h3 class="card-title">Budget Information</h3>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label" for="estimated_budget">Estimated Budget <span style="color: #EF4444;">*</span></label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: var(--text-secondary);">$</span>
                            <input type="number" id="estimated_budget" name="estimated_budget" class="form-input" style="padding-left: 2rem;" placeholder="0.00" step="0.01" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="currency">Currency</label>
                        <select id="currency" name="currency" class="form-input">
                            <option value="USD">USD ($)</option>
                            <option value="TZS">TZS (TSh)</option>
                            <option value="EUR">EUR (€)</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Project Team -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Project Team</h3>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <div class="form-group">
                        <label class="form-label" for="project_manager">Project Manager</label>
                        <select id="project_manager" name="project_manager" class="form-input">
                            <option value="">Select Project Manager</option>
                            <option value="1">John Doe</option>
                            <option value="2">Jane Smith</option>
                            <option value="3">Mike Johnson</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="site_supervisor">Site Supervisor</label>
                        <select id="site_supervisor" name="site_supervisor" class="form-input">
                            <option value="">Select Site Supervisor</option>
                            <option value="1">David Wilson</option>
                            <option value="2">Sarah Brown</option>
                            <option value="3">Tom Anderson</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="accountant">Accountant</label>
                        <select id="accountant" name="accountant" class="form-input">
                            <option value="">Select Accountant</option>
                            <option value="1">Emily Davis</option>
                            <option value="2">Robert Taylor</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div>
            <!-- Project Status -->
            <div class="card" style="margin-bottom: 1.5rem;">
                <div class="card-header">
                    <h3 class="card-title">Project Status</h3>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="status">Status</label>
                    <select id="status" name="status" class="form-input">
                        <option value="planning">Planning</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="on-hold">On Hold</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="priority">Priority</label>
                    <select id="priority" name="priority" class="form-input">
                        <option value="low">Low</option>
                        <option value="medium" selected>Medium</option>
                        <option value="high">High</option>
                        <option value="urgent">Urgent</option>
                    </select>
                </div>
            </div>
            
            <!-- Additional Information -->
            <div class="card" style="margin-bottom: 1.5rem;">
                <div class="card-header">
                    <h3 class="card-title">Additional Information</h3>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="client_name">Client Name</label>
                    <input type="text" id="client_name" name="client_name" class="form-input" placeholder="Enter client name">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="client_email">Client Email</label>
                    <input type="email" id="client_email" name="client_email" class="form-input" placeholder="client@example.com">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="client_phone">Client Phone</label>
                    <input type="tel" id="client_phone" name="client_phone" class="form-input" placeholder="+255 XXX XXX XXX">
                </div>
            </div>
            
            <!-- Actions -->
            <div class="card">
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-save"></i> Create Project
                    </button>
                    <a href="{{ route('projects.index') }}" class="btn btn-outline" style="width: 100%; text-align: center;">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>

<style>
.form-group {
    margin-bottom: 1rem;
}

.form-label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: var(--text-primary);
    font-size: 0.9rem;
}

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

.form-input select {
    cursor: pointer;
}

@media (max-width: 1024px) {
    div[style*="grid-template-columns: 2fr 1fr"] {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endsection
