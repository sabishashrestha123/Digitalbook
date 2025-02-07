@extends('backend.layouts.master')

@section('content')
<div class="col-md-12 margin_top_30">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head d-flex justify-content-between align-items-center">
            <div class="heading1 margin_0">
                <h2>Feedback Details</h2>
            </div>
            <a href="{{ route('admin.feedback.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
        <div class="card mt-4 shadow-sm border-light">
            <div class="card-body">
                <!-- Name & Email Row -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5><strong>Name:</strong></h5>
                        <p class="text-muted">{{ $feedback->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5><strong>Email:</strong></h5>
                        <p class="text-muted">{{ $feedback->email }}</p>
                    </div>
                </div>

                <!-- Phone & Subject Row -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5><strong>Phone:</strong></h5>
                        <p class="text-muted">{{ $feedback->phone }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5><strong>Subject:</strong></h5>
                        <p class="text-muted">{{ $feedback->subject }}</p>
                    </div>
                </div>

                <!-- Message Row -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h5><strong>Message:</strong></h5>
                        <p class="text-muted">{{ $feedback->message }}</p>
                    </div>
                </div>

                <!-- Rating Row with Star Rating -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h5><strong>Rating:</strong></h5>
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star {{ $i <= $feedback->rating ? 'text-warning' : 'text-muted' }}"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer with Delete Option -->
            <div class="card-footer text-right">
                <form action="{{ route('admin.feedback.destroy', $feedback) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this feedback?')">
                        <i class="fas fa-trash"></i> Delete Feedback
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
