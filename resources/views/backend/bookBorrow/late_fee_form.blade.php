@extends('backend.layouts.master')

@section('content')
<div class="col-md-6 margin_top_30 mx-auto">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Pay Late Fee</h2>
            </div>
        </div>
        <div class="padding_infor_info">
            <form action="{{ route('admin.book-borrow.processLateFee', $bookBorrow) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Calculated Late Fee</label>
                    <input type="text" class="form-control"
                           value="Rs. {{ number_format($lateFee) }}"
                           readonly>
                    <input type="hidden" name="late_fee" value="{{ $lateFee }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Amount to Pay</label>
                    <input type="number"
                           name="paid_amount"
                           class="form-control"
                           min="{{ $lateFee }}"
                           step="1" 
                           required
                           placeholder="Enter whole number amount">
                    @if($lateFee > 0)
                        <small class="text-muted">Minimum payment: Rs. {{ number_format($lateFee) }}</small>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-check-circle"></i> Submit Payment
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
