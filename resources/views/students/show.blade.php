@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="card-title">Student Details</h2>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <th style="width: 150px;">Name</th>
                            <td>{{ $student->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $student->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $student->phone }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $student->address ?: 'Not provided' }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $student->date_of_birth ? date('M d, Y', strtotime($student->date_of_birth)) : 'Not provided' }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ date('M d, Y H:i A', strtotime($student->created_at)) }}</td>
                        </tr>
                        <tr>
                            <th>Last Updated</th>
                            <td>{{ date('M d, Y H:i A', strtotime($student->updated_at)) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 