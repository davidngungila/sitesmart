@extends('layouts.app')

@section('title', 'Project Documents - SiteSmart')

@section('content')
<div class="page-header">
    <h1 class="page-title">Project Documents</h1>
    <nav class="breadcrumb">
        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a>
        <span>/</span>
        <a href="{{ route('projects.index') }}">Projects</a>
        <span>/</span>
        <span>Documents</span>
    </nav>
</div>

<!-- Project Selector and Upload -->
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
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" id="upload-btn">
                <i class="fas fa-upload"></i> Upload Files
            </button>
            <button class="btn btn-primary" id="create-folder-btn">
                <i class="fas fa-folder-plus"></i> New Folder
            </button>
        </div>
    </div>
</div>

<!-- File Upload Area (Hidden by default) -->
<div id="upload-area" class="card" style="margin-bottom: 1.5rem; display: none;">
    <div class="card-header">
        <h3 class="card-title">Upload Files</h3>
        <button class="btn btn-outline" id="close-upload" style="padding: 0.5rem;">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div style="padding: 2rem; text-align: center;">
        <div style="border: 2px dashed var(--border-color); border-radius: 0.5rem; padding: 3rem; background: var(--bg-color);">
            <i class="fas fa-cloud-upload-alt" style="font-size: 3rem; color: var(--text-secondary); margin-bottom: 1rem;"></i>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Drag and drop files here or click to browse</p>
            <input type="file" id="file-input" multiple style="display: none;">
            <button class="btn btn-primary" onclick="document.getElementById('file-input').click()">
                <i class="fas fa-folder-open"></i> Browse Files
            </button>
        </div>
    </div>
</div>

<!-- Documents List -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Documents</h3>
        <div style="display: flex; gap: 0.5rem;">
            <button class="btn btn-outline" id="list-view-btn" style="padding: 0.5rem;">
                <i class="fas fa-list"></i>
            </button>
            <button class="btn btn-outline active" id="grid-view-btn" style="padding: 0.5rem;">
                <i class="fas fa-th"></i>
            </button>
            <button class="btn btn-outline" style="padding: 0.5rem;">
                <i class="fas fa-filter"></i> Filter
            </button>
        </div>
    </div>
    
    <!-- Breadcrumb Navigation -->
    <div style="padding: 1rem; border-bottom: 1px solid var(--border-color); display: flex; align-items: center; gap: 0.5rem;">
        <a href="#" style="color: var(--primary-color); text-decoration: none;">
            <i class="fas fa-home"></i> Home
        </a>
        <span style="color: var(--text-secondary);">/</span>
        <span style="color: var(--text-secondary);">Projects</span>
        <span style="color: var(--text-secondary);">/</span>
        <span style="color: var(--text-primary); font-weight: 500;">Residential Complex A</span>
    </div>
    
    <!-- Documents Grid View -->
    <div id="documents-grid" style="padding: 1.5rem; display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1.5rem;">
        <!-- Folder -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #F59E0B; margin-bottom: 0.5rem;">
                <i class="fas fa-folder"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">Blueprints</div>
            <div style="font-size: 0.875rem; color: var(--text-secondary);">12 files</div>
        </div>
        
        <!-- Folder -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #F59E0B; margin-bottom: 0.5rem;">
                <i class="fas fa-folder"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">Contracts</div>
            <div style="font-size: 0.875rem; color: var(--text-secondary);">5 files</div>
        </div>
        
        <!-- Folder -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #F59E0B; margin-bottom: 0.5rem;">
                <i class="fas fa-folder"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem;">Reports</div>
            <div style="font-size: 0.875rem; color: var(--text-secondary);">8 files</div>
        </div>
        
        <!-- PDF Document -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s; position: relative;">
            <div style="font-size: 3rem; color: #EF4444; margin-bottom: 0.5rem;">
                <i class="fas fa-file-pdf"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem; font-size: 0.875rem;">Site Survey Report</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary);">2.5 MB</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Jan 15, 2026</div>
            <div style="position: absolute; top: 0.5rem; right: 0.5rem;">
                <div style="width: 8px; height: 8px; background: var(--accent-color); border-radius: 50%;"></div>
            </div>
        </div>
        
        <!-- Word Document -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #2563EB; margin-bottom: 0.5rem;">
                <i class="fas fa-file-word"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem; font-size: 0.875rem;">Project Proposal</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary);">1.2 MB</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Jan 10, 2026</div>
        </div>
        
        <!-- Excel Document -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #10B981; margin-bottom: 0.5rem;">
                <i class="fas fa-file-excel"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem; font-size: 0.875rem;">Budget Sheet</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary);">856 KB</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Jan 12, 2026</div>
        </div>
        
        <!-- Image -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #8B5CF6; margin-bottom: 0.5rem;">
                <i class="fas fa-file-image"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem; font-size: 0.875rem;">Site Photo 1</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary);">3.2 MB</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Jan 20, 2026</div>
        </div>
        
        <!-- PDF Document -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #EF4444; margin-bottom: 0.5rem;">
                <i class="fas fa-file-pdf"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem; font-size: 0.875rem;">Architectural Plans</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary);">5.8 MB</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Feb 3, 2026</div>
        </div>
        
        <!-- PDF Document -->
        <div class="document-item" style="cursor: pointer; padding: 1rem; border: 1px solid var(--border-color); border-radius: 0.5rem; text-align: center; transition: all 0.2s;">
            <div style="font-size: 3rem; color: #EF4444; margin-bottom: 0.5rem;">
                <i class="fas fa-file-pdf"></i>
            </div>
            <div style="font-weight: 500; color: var(--text-primary); margin-bottom: 0.25rem; font-size: 0.875rem;">Permit Documents</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary);">1.5 MB</div>
            <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Feb 5, 2026</div>
        </div>
    </div>
    
    <!-- Documents List View (Hidden by default) -->
    <div id="documents-list" style="display: none;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 50px;"></th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Modified</th>
                        <th>Uploaded By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-folder" style="color: #F59E0B; font-size: 1.5rem;"></i></td>
                        <td><strong>Blueprints</strong></td>
                        <td>Folder</td>
                        <td>12 files</td>
                        <td>Jan 15, 2026</td>
                        <td>John Doe</td>
                        <td>
                            <div style="display: flex; gap: 0.25rem;">
                                <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Open">
                                    <i class="fas fa-folder-open"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf" style="color: #EF4444; font-size: 1.5rem;"></i></td>
                        <td><strong>Site Survey Report.pdf</strong></td>
                        <td>PDF</td>
                        <td>2.5 MB</td>
                        <td>Jan 15, 2026</td>
                        <td>David Wilson</td>
                        <td>
                            <div style="display: flex; gap: 0.25rem;">
                                <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Download">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem; color: #EF4444;" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-word" style="color: #2563EB; font-size: 1.5rem;"></i></td>
                        <td><strong>Project Proposal.docx</strong></td>
                        <td>Word</td>
                        <td>1.2 MB</td>
                        <td>Jan 10, 2026</td>
                        <td>Jane Smith</td>
                        <td>
                            <div style="display: flex; gap: 0.25rem;">
                                <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="Download">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-outline" style="padding: 0.375rem 0.75rem; font-size: 0.875rem;" title="View">
                                    <i class="fas fa-eye"></i>
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

.document-item:hover {
    border-color: var(--primary-color);
    box-shadow: 0 2px 8px rgba(31, 58, 138, 0.1);
    transform: translateY(-2px);
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Upload button toggle
    const uploadBtn = document.getElementById('upload-btn');
    const uploadArea = document.getElementById('upload-area');
    const closeUpload = document.getElementById('close-upload');
    
    if (uploadBtn && uploadArea) {
        uploadBtn.addEventListener('click', function() {
            uploadArea.style.display = uploadArea.style.display === 'none' ? 'block' : 'none';
        });
    }
    
    if (closeUpload && uploadArea) {
        closeUpload.addEventListener('click', function() {
            uploadArea.style.display = 'none';
        });
    }
    
    // View toggle
    const listViewBtn = document.getElementById('list-view-btn');
    const gridViewBtn = document.getElementById('grid-view-btn');
    const documentsList = document.getElementById('documents-list');
    const documentsGrid = document.getElementById('documents-grid');
    
    if (listViewBtn && gridViewBtn) {
        listViewBtn.addEventListener('click', function() {
            this.classList.add('active');
            gridViewBtn.classList.remove('active');
            documentsGrid.style.display = 'none';
            documentsList.style.display = 'block';
        });
        
        gridViewBtn.addEventListener('click', function() {
            this.classList.add('active');
            listViewBtn.classList.remove('active');
            documentsList.style.display = 'none';
            documentsGrid.style.display = 'grid';
        });
    }
    
    // File input change
    const fileInput = document.getElementById('file-input');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            console.log('Files selected:', this.files.length);
            // Implement file upload logic
        });
    }
});
</script>
@endpush
@endsection
