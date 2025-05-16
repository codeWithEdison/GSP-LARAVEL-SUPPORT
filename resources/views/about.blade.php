@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title mb-4">About Student Management System</h2>
            
            <div class="row">
                <div class="col-md-8">
                    <p class="lead">
                        Welcome to our Student Management System, a comprehensive solution for managing student information efficiently.
                    </p>
                    
                    <h4 class="mt-4">Our Features</h4>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">
                            <i class="fas fa-user-graduate text-primary me-2"></i>
                            Student Information Management
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-database text-primary me-2"></i>
                            Secure Data Storage
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-edit text-primary me-2"></i>
                            Easy Updates and Modifications
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-search text-primary me-2"></i>
                            Quick Search and Filter Options
                        </li>
                    </ul>

                    <div class="mt-4">
                        <h4>Contact Us</h4>
                        <p>
                            If you have any questions or need support, please don't hesitate to reach out:
                        </p>
                        <p>
                            <i class="fas fa-envelope text-primary me-2"></i> Email: support@studentms.com<br>
                            <i class="fas fa-phone text-primary me-2"></i> Phone: (123) 456-7890
                        </p>
                    </div>
                </div>
                
                <!-- <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Quick Stats</h5>
                            <div class="text-center mt-3">
                                <div class="mb-3">
                                    <i class="fas fa-users fa-3x text-primary"></i>
                                    <h3 class="mt-2">{{ App\Models\Student::count() }}</h3>
                                    <p class="text-muted">Total Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
