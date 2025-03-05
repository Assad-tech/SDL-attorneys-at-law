@extends('Admin.layouts.master')

@section('title', 'Admin | Dashbaord')

@section('custom_css')
    <style>
        .dropdown-menu-xxl {
            width: 300px;
        }

        .dropdown-menu .megamenu-list {
            min-width: 280px !important;
        }

        /*Add Actice class on the Workspace Link*/
        li.workspace-link.active {
            color: var(--bs-menu-item-hover-color);
            font-weight: 500;
        }

        /*View List of Boards and card */
        .lists-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 16px 0px;
            margin: 0 auto;
            justify-content: start;
        }

        /* Each list container */
        .list-container {
            background: #f4f5f7;
            border-radius: 8px;
            padding: 16px;
            width: 300px;
            /* Set a fixed width for lists */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* List title */
        .list-title {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 12px;
            color: #333;
        }

        /* Cards container */
        .cards-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* Each card */
        .card-link {
            background: #ffffff;
            margin-bottom: 8px;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .card-link:hover {
            background: #e1e7ef;
        }
    </style>
@endsection
@section('content')
    <div class="page-container">
        {{-- Page title --}}
        <div class="page-title-box">

            <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                <div class="flex-grow-1">
                    <h4 class="font-18 mb-0">Admin</h4>
                </div>

                {{-- navigations --}}
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        {{-- <li class="breadcrumb-item"><a href="#">ProMaX</a></li> --}}
                        {{-- @if (context . subtitle !== undefined) { --}}
                        {{-- <li class="breadcrumb-item"><a href="#">Admin</a> --}}
                        </li>
                        {{-- } --}}
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>

            {{-- @if (context . title === undefined) { --}}
            <div class="d-flex align-items-sm-center flex-sm-row flex-column">
                <h4 class="font-18 mb-0">Welcome</h4>
            </div>
            {{-- } --}}
        </div>
        {{-- End Page title --}}

        {{-- Page content -- Dashboard Cards --}}
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card tilebox-one">
                    <div class="card-body">
                        <i class="icon-home float-end m-0 h2 text-muted"></i>

                        <h6 class="text-muted text-uppercase mt-0">Home</h6>
                        <h3 class="my-3" data-plugin="counterup">{{ $allProperties?? 0 }}</h3>
                        {{-- <span class="badge bg-success me-1"> +11% </span> <span class="text-muted">From previous
                            period</span> --}}
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card tilebox-one">
                    <div class="card-body">
                        <i class="icon-note float-end m-0 h2 text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Contact</h6>
                        <h3 class="my-3"><span data-plugin="counterup">{{ $allContactUs?? 0 }}</span></h3>
                        {{-- <span class="badge bg-danger me-1"> -29% </span> <span class="text-muted">From previous
                            period</span> --}}
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
        

    </div> <!-- container -->
@endsection
