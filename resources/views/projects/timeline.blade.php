@extends('layouts.app')

@section('title', 'Project Timeline - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">Project Timeline (Gantt Chart)</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('projects.index') }}">Projects</a>
        <span>/</span>
        <span>Timeline</span>
    </nav>
</div>

<!-- Project Selector and Controls -->
<div class="card" style="margin-bottom: 1.5rem;">
    <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap; justify-content: space-between;">
        <div style="display: flex; gap: 1rem; flex-wrap: wrap; flex: 1;">
            <div style="min-width: 250px;">
                <select id="project-selector" class="form-input" style="width: 100%;">
                    <option value="">All Projects</option>
                    <option value="1" selected>Residential Complex A</option>
                    <option value="2">Office Building B</option>
                    <option value="3">Warehouse Complex</option>
                </select>
            </div>
            <div style="display: flex; gap: 0.5rem;">
                <button class="btn btn-outline" id="zoom-out">
                    <i class="fas fa-search-minus"></i>
                </button>
                <button class="btn btn-outline" id="zoom-in">
                    <i class="fas fa-search-plus"></i>
                </button>
                <button class="btn btn-outline" id="fit-to-screen">
                    <i class="fas fa-compress"></i> Fit to Screen
                </button>
            </div>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline">
                <i class="fas fa-download"></i> Export
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Task
            </button>
        </div>
    </div>
</div>

<!-- Gantt Chart Container -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Project Timeline</h3>
        <div style="display: flex; gap: 0.5rem; align-items: center;">
            <span style="font-size: 0.875rem; color: var(--text-secondary);">View:</span>
            <select id="view-type" style="padding: 0.5rem; border: 1px solid var(--border-color); border-radius: 0.5rem;">
                <option value="month">Month</option>
                <option value="week" selected>Week</option>
                <option value="day">Day</option>
            </select>
        </div>
    </div>
    
    <!-- Gantt Chart -->
    <div style="overflow-x: auto; padding: 1.5rem;">
        <div id="gantt-chart" style="min-width: 1200px; position: relative;">
            <!-- Timeline Header -->
            <div style="display: flex; border-bottom: 2px solid var(--border-color); margin-bottom: 1rem; padding-bottom: 0.5rem;">
                <div style="width: 250px; font-weight: 600; color: var(--text-primary);">Task / Phase</div>
                <div style="flex: 1; display: flex; gap: 1rem;">
                    <div style="flex: 1; text-align: center; font-size: 0.875rem; color: var(--text-secondary);">Jan 2026</div>
                    <div style="flex: 1; text-align: center; font-size: 0.875rem; color: var(--text-secondary);">Feb 2026</div>
                    <div style="flex: 1; text-align: center; font-size: 0.875rem; color: var(--text-secondary);">Mar 2026</div>
                    <div style="flex: 1; text-align: center; font-size: 0.875rem; color: var(--text-secondary);">Apr 2026</div>
                    <div style="flex: 1; text-align: center; font-size: 0.875rem; color: var(--text-secondary);">May 2026</div>
                    <div style="flex: 1; text-align: center; font-size: 0.875rem; color: var(--text-secondary);">Jun 2026</div>
                </div>
            </div>
            
            <!-- Gantt Bars -->
            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <!-- Phase 1: Planning -->
                <div style="display: flex; align-items: center; min-height: 50px;">
                    <div style="width: 250px; font-weight: 500; color: var(--text-primary);">Phase 1: Planning & Design</div>
                    <div style="flex: 1; position: relative; height: 30px; background: var(--bg-color); border-radius: 4px;">
                        <div style="position: absolute; left: 0%; width: 12.5%; height: 100%; background: linear-gradient(135deg, #10B981, #059669); border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.75rem; font-weight: 500;">
                            Planning
                        </div>
                    </div>
                </div>
                
                <!-- Phase 2: Foundation -->
                <div style="display: flex; align-items: center; min-height: 50px;">
                    <div style="width: 250px; font-weight: 500; color: var(--text-primary); padding-left: 1.5rem;">Phase 2: Foundation Work</div>
                    <div style="flex: 1; position: relative; height: 30px; background: var(--bg-color); border-radius: 4px;">
                        <div style="position: absolute; left: 12.5%; width: 15%; height: 100%; background: linear-gradient(135deg, var(--accent-color), #EA580C); border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.75rem; font-weight: 500;">
                            Foundation
                        </div>
                    </div>
                </div>
                
                <!-- Phase 3: Structure -->
                <div style="display: flex; align-items: center; min-height: 50px;">
                    <div style="width: 250px; font-weight: 500; color: var(--text-primary); padding-left: 1.5rem;">Phase 3: Structure & Framing</div>
                    <div style="flex: 1; position: relative; height: 30px; background: var(--bg-color); border-radius: 4px;">
                        <div style="position: absolute; left: 27.5%; width: 20%; height: 100%; background: linear-gradient(135deg, #6366F1, #4F46E5); border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.75rem; font-weight: 500;">
                            Structure
                        </div>
                    </div>
                </div>
                
                <!-- Phase 4: Finishing -->
                <div style="display: flex; align-items: center; min-height: 50px;">
                    <div style="width: 250px; font-weight: 500; color: var(--text-primary); padding-left: 1.5rem;">Phase 4: Finishing & Handover</div>
                    <div style="flex: 1; position: relative; height: 30px; background: var(--bg-color); border-radius: 4px;">
                        <div style="position: absolute; left: 47.5%; width: 15%; height: 100%; background: linear-gradient(135deg, #8B5CF6, #7C3AED); border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.75rem; font-weight: 500;">
                            Finishing
                        </div>
                    </div>
                </div>
                
                <!-- Milestone: Design Approval -->
                <div style="display: flex; align-items: center; min-height: 40px;">
                    <div style="width: 250px; font-size: 0.875rem; color: var(--text-secondary); padding-left: 2rem;">✓ Design Approval</div>
                    <div style="flex: 1; position: relative; height: 20px;">
                        <div style="position: absolute; left: 12.5%; top: 50%; transform: translateY(-50%); width: 2px; height: 20px; background: #10B981;"></div>
                        <div style="position: absolute; left: 12.5%; top: 50%; transform: translate(-50%, -50%); width: 12px; height: 12px; background: #10B981; border-radius: 50%; border: 2px solid white; box-shadow: 0 0 0 2px #10B981;"></div>
                    </div>
                </div>
                
                <!-- Milestone: Foundation Complete -->
                <div style="display: flex; align-items: center; min-height: 40px;">
                    <div style="width: 250px; font-size: 0.875rem; color: var(--text-secondary); padding-left: 2rem;">⏱ Foundation Complete</div>
                    <div style="flex: 1; position: relative; height: 20px;">
                        <div style="position: absolute; left: 27.5%; top: 50%; transform: translateY(-50%); width: 2px; height: 20px; background: var(--accent-color);"></div>
                        <div style="position: absolute; left: 27.5%; top: 50%; transform: translate(-50%, -50%); width: 12px; height: 12px; background: var(--accent-color); border-radius: 50%; border: 2px solid white; box-shadow: 0 0 0 2px var(--accent-color);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Legend -->
    <div style="padding: 1rem; border-top: 1px solid var(--border-color); display: flex; gap: 2rem; flex-wrap: wrap; align-items: center;">
        <div style="font-weight: 500; color: var(--text-primary);">Legend:</div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <div style="width: 20px; height: 12px; background: linear-gradient(135deg, #10B981, #059669); border-radius: 2px;"></div>
            <span style="font-size: 0.875rem;">Completed</span>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <div style="width: 20px; height: 12px; background: linear-gradient(135deg, var(--accent-color), #EA580C); border-radius: 2px;"></div>
            <span style="font-size: 0.875rem;">In Progress</span>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <div style="width: 20px; height: 12px; background: linear-gradient(135deg, #6366F1, #4F46E5); border-radius: 2px;"></div>
            <span style="font-size: 0.875rem;">Upcoming</span>
        </div>
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <div style="width: 12px; height: 12px; background: #10B981; border-radius: 50%; border: 2px solid white; box-shadow: 0 0 0 2px #10B981;"></div>
            <span style="font-size: 0.875rem;">Milestone</span>
        </div>
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

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gantt chart interactions
    const zoomIn = document.getElementById('zoom-in');
    const zoomOut = document.getElementById('zoom-out');
    const fitToScreen = document.getElementById('fit-to-screen');
    const viewType = document.getElementById('view-type');
    
    if (zoomIn) {
        zoomIn.addEventListener('click', function() {
            console.log('Zoom in');
            // Implement zoom functionality
        });
    }
    
    if (zoomOut) {
        zoomOut.addEventListener('click', function() {
            console.log('Zoom out');
            // Implement zoom functionality
        });
    }
    
    if (fitToScreen) {
        fitToScreen.addEventListener('click', function() {
            console.log('Fit to screen');
            // Implement fit to screen functionality
        });
    }
    
    if (viewType) {
        viewType.addEventListener('change', function() {
            console.log('View type changed:', this.value);
            // Implement view type change
        });
    }
});
</script>
@endpush
@endsection
