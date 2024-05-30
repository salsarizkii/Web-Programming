@extends('dashboard.layouts.main')

@section('container')

  <div class="row" >
    <div class="col-md-6 mx-auto mt-3">
        <h3 class="mb-3">Create an Item</h3>
        <form action="/dashboard/posts" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="d-flex align-items-center mb-3" >
                <label for="title" class="form-label me-5 col-md-1">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="d-flex align-items-center mb-3">
                <label for="type" class="form-label me-5 col-md-1">Type</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>
            <div class="d-flex align-items-center mb-3">
                <label for="quantity" class="form-label me-5 col-md-1">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
                </div>

            <button type="submit" class="btn fw-bold mb-3 btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

