<!-- Font Awesome -->
<link rel="stylesheet" href="{{url('/admin/plugins/fontawesome-free/css/all.min.css')}}">

<!-- Theme style -->
<link rel="stylesheet" href="{{url('/admin/dist/css/adminlte.min.css')}}">


<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{url('/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{url('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{url('/admin/plugins/jqvmap/jqvmap.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{url('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{url('/admin/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{url('/admin/plugins/summernote/summernote-bs4.min.css')}}">

<style>
    /* Modern styling for the Obat page */
    .fixed-table {
        max-height: 300px;
        overflow-y: auto;
    }

    .fixed-table thead {
        position: sticky;
        top: 0;
        background-color: white;
        z-index: 1;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    /* Card styling to match sidebar theme */
    .card-primary {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        margin-bottom: 1.5rem;
    }

    .card-primary .card-header {
        background: linear-gradient(90deg, #198754 0%, #14532d 100%);
        border-bottom: none;
        padding: 0.75rem 1.25rem;
    }

    .card-primary .card-title {
        font-weight: 600;
    }

    /* Button styling */
    .btn-primary {
        background: linear-gradient(90deg, #198754 0%, #14532d 100%);
        border: none;
        box-shadow: 0 2px 4px rgba(25, 135, 84, 0.3);
        transition: all 0.2s ease;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background: linear-gradient(90deg, #198754 0%, #157347 100%);
        box-shadow: 0 4px 8px rgba(25, 135, 84, 0.4);
    }

    .btn-secondary {
        background-color: #64748b;
        border: none;
        box-shadow: 0 2px 4px rgba(100, 116, 139, 0.3);
        transition: all 0.2s ease;
    }

    .btn-secondary:hover,
    .btn-secondary:focus {
        background-color: #475569;
        box-shadow: 0 4px 8px rgba(100, 116, 139, 0.4);
    }

    .btn-danger {
        background-color: #ef4444;
        border: none;
        box-shadow: 0 2px 4px rgba(239, 68, 68, 0.3);
        transition: all 0.2s ease;
    }

    .btn-danger:hover,
    .btn-danger:focus {
        background-color: #dc2626;
        box-shadow: 0 4px 8px rgba(239, 68, 68, 0.4);
    }

    /* Form control styling */
    .form-control:focus {
        border-color: #14532d;
        box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
    }

    /* Table styling */
    .table thead th {
        background-color: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
        font-weight: 600;
    }

    .table tbody tr:hover {
        background-color: #f1f5f9;
    }

    /* Search box styling */
    .card-tools .input-group-sm .form-control {
        border-radius: 4px 0 0 4px;
    }

    .card-tools .input-group-append .btn-default {
        background-color: #f8fafc;
        border-color: #d1d5db;
        color: #64748b;
        border-radius: 0 4px 4px 0;
    }

    .card-tools .input-group-append .btn-default:hover {
        background-color: #e2e8f0;
    }

    body .text-primary {
        color: #198754 !important;
    }

    body .text-primary:hover {
        color: #157347 !important;
        text-decoration: none;
    }
</style>

<style>
    /* Modern Sidebar Styling */
    .main-sidebar {
        background: linear-gradient(180deg, #198754 0%, #14532d 100%) !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: rgba(255, 255, 255, 0.15) !important;
        color: #ffffff !important;
        border-left: 4px solid #ffffff;
        border-radius: 0 4px 4px 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-sidebar .nav-item .nav-link {
        padding: 0.75rem 1rem;
        margin-bottom: 0.25rem;
        border-radius: 0 4px 4px 0;
        transition: all 0.2s ease;
    }

    .nav-sidebar .nav-item .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link:not(.active):hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #ffffff;
    }

    .brand-link {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
    }

    .brand-text {
        color: #ffffff !important;
        font-weight: 600 !important;
    }

    .user-panel {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
    }

    .sidebar-search-results {
        background-color: #14532d !important;
    }

    .form-control-sidebar {
        background-color: rgba(255, 255, 255, 0.1) !important;
        border: none !important;
        color: #ffffff !important;
    }

    .form-control-sidebar::placeholder {
        color: rgba(255, 255, 255, 0.6) !important;
    }

    .btn-sidebar {
        background-color: rgba(255, 255, 255, 0.1) !important;
        color: #ffffff !important;
    }

    .nav-icon {
        margin-right: 0.5rem !important;
    }
</style>

<style>
    .selected-obats {
        margin-top: 10px;
        display: none;
    }

    .selected-obats .list-group-item {
        padding: 0.5rem 1rem;
        margin-bottom: 5px;
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 6px;
    }

    .selected-obats .btn {
        padding: 0;
        margin-left: 10px;
        background: transparent;
        border: none;
        color: #dc3545;
        transition: all 0.2s ease;
    }

    .selected-obats .btn:hover {
        color: #bd2130;
        transform: scale(1.1);
    }
</style>