@extends('layouts.app')

@section('title', 'Project Phases - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">Project Phases</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('projects.index') }}">Projects</a>
        <span>/</span>
        <span>Project Phases</span>
    </nav>
</div>

<!-- Project Selector -->
<div class="card" style="margin-bottom: 1.5rem;">
    <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 250px;">
            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--text-primary);">Select Project</label>
            <select id="project-selector" class="form-input" style="width: 100%;">
                <option value="">All Projects</option>
                <option value="1" selected>Residential Complex A</option>
                <option value="2">Office Building B</option>
                <option value="3">Warehouse Complex</option>
                <option value="4">Shopping Mall</option>
            </select>
        </div>
        <button class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Phase
        </button>
    </div>
</div>

<!-- Phases Timeline View -->
<div class="card" style="margin-bottom: 1.5rem;">
    <div class="card-header">
        <h3 class="card-title">Project Phases Overview</h3>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" style="padding: 0.5rem;">
                <i class="fas fa-list"></i> List View
            </button>
            <button class="btn btn-primary" style="padding: 0.5rem;">
                <i class="fas fa-chart-line"></i> Timeline View
            </button>
        </div>
    </div>
    
    <!-- Timeline Visualization -->
    <div style="padding: 1.5rem;">
        <div style="position: relative; padding-left: 2rem;">
            <!-- Phase 1: Planning -->
            <div style="position: relative; margin-bottom: 2rem;">
                <div style="position: absolute; left: -2rem; top: 0; width: 16px; height: 16px; background: #10B981; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 3px #10B981;"></div>
                <div style="position: absolute; left: -1.5rem; top: 16px; width: 2px; height: calc(100% + 1rem); background: var(--border-color);"></div>
                <div class="card" style="margin-left: 1rem; border-left: 4px solid #10B981;">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.125rem; font-weight: 600;">Phase 1: Planning & Design</h4>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap; font-size: 0.875rem; color: var(--text-secondary);">
                                <span><i class="fas fa-calendar"></i> Jan 15 - Feb 5, 2026</span>
                                <span><i class="fas fa-user"></i> John Doe</span>
                                <span><i class="fas fa-check-circle" style="color: #10B981;"></i> Completed</span>
                            </div>
                        </div>
                        <span class="badge badge-success">Completed</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem;">Site survey, architectural design, engineering plans, permits and approvals.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Progress</div>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 100%; height: 100%; background: #10B981;"></div>
                                </div>
                                <span style="font-size: 0.875rem; font-weight: 500;">100%</span>
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Budget</div>
                            <div style="font-weight: 500;">$50,000 / $50,000</div>
                        </div>
                    </div>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
                        <a href="#" class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 0.875rem;">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Phase 2: Foundation -->
            <div style="position: relative; margin-bottom: 2rem;">
                <div style="position: absolute; left: -2rem; top: 0; width: 16px; height: 16px; background: var(--accent-color); border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 3px var(--accent-color);"></div>
                <div style="position: absolute; left: -1.5rem; top: 16px; width: 2px; height: calc(100% + 1rem); background: var(--border-color);"></div>
                <div class="card" style="margin-left: 1rem; border-left: 4px solid var(--accent-color);">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.125rem; font-weight: 600;">Phase 2: Foundation Work</h4>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap; font-size: 0.875rem; color: var(--text-secondary);">
                                <span><i class="fas fa-calendar"></i> Feb 6 - Mar 15, 2026</span>
                                <span><i class="fas fa-user"></i> Mike Johnson</span>
                                <span><i class="fas fa-clock" style="color: var(--accent-color);"></i> In Progress</span>
                            </div>
                        </div>
                        <span class="badge badge-warning">In Progress</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem;">Excavation, concrete pouring, foundation walls, waterproofing.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Progress</div>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 65%; height: 100%; background: var(--accent-color);"></div>
                                </div>
                                <span style="font-size: 0.875rem; font-weight: 500;">65%</span>
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Budget</div>
                            <div style="font-weight: 500;">$120,000 / $150,000</div>
                        </div>
                    </div>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
                        <a href="#" class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 0.875rem;">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Phase 3: Structure -->
            <div style="position: relative; margin-bottom: 2rem;">
                <div style="position: absolute; left: -2rem; top: 0; width: 16px; height: 16px; background: #6366F1; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 3px #6366F1;"></div>
                <div style="position: absolute; left: -1.5rem; top: 16px; width: 2px; height: calc(100% + 1rem); background: var(--border-color);"></div>
                <div class="card" style="margin-left: 1rem; border-left: 4px solid #6366F1;">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.125rem; font-weight: 600;">Phase 3: Structure & Framing</h4>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap; font-size: 0.875rem; color: var(--text-secondary);">
                                <span><i class="fas fa-calendar"></i> Mar 16 - May 10, 2026</span>
                                <span><i class="fas fa-user"></i> David Wilson</span>
                                <span><i class="fas fa-hourglass-half" style="color: #6366F1;"></i> Upcoming</span>
                            </div>
                        </div>
                        <span class="badge badge-info">Upcoming</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem;">Steel/concrete structure, framing, roofing, exterior walls.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Progress</div>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 0%; height: 100%; background: #6366F1;"></div>
                                </div>
                                <span style="font-size: 0.875rem; font-weight: 500;">0%</span>
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Budget</div>
                            <div style="font-weight: 500;">$0 / $200,000</div>
                        </div>
                    </div>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
                        <a href="#" class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 0.875rem;">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Phase 4: Finishing -->
            <div style="position: relative;">
                <div style="position: absolute; left: -2rem; top: 0; width: 16px; height: 16px; background: var(--border-color); border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 3px var(--border-color);"></div>
                <div class="card" style="margin-left: 1rem; border-left: 4px solid var(--border-color);">
                    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                        <div>
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 1.125rem; font-weight: 600;">Phase 4: Finishing & Handover</h4>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap; font-size: 0.875rem; color: var(--text-secondary);">
                                <span><i class="fas fa-calendar"></i> May 11 - Jun 30, 2026</span>
                                <span><i class="fas fa-user"></i> TBD</span>
                                <span><i class="fas fa-hourglass-half" style="color: var(--text-secondary);"></i> Not Started</span>
                            </div>
                        </div>
                        <span class="badge" style="background: var(--bg-color); color: var(--text-secondary);">Not Started</span>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem;">Interior finishing, electrical, plumbing, painting, final inspection, handover.</p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Progress</div>
                            <div style="display: flex; align-items: center; gap: 0.5rem;">
                                <div style="flex: 1; height: 8px; background: var(--bg-color); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 0%; height: 100%; background: var(--border-color);"></div>
                                </div>
                                <span style="font-size: 0.875rem; font-weight: 500;">0%</span>
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <div style="font-size: 0.875rem; color: var(--text-secondary); margin-bottom: 0.25rem;">Budget</div>
                            <div style="font-weight: 500;">$0 / $80,000</div>
                        </div>
                    </div>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
                        <a href="#" class="btn btn-outline" style="padding: 0.5rem 1rem; font-size: 0.875rem;">
                            <i class="fas fa-eye"></i> View Details
                        </a>
                    </div>
                </div>
            </div>
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
@endsection
