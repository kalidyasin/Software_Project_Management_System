<!DOCTYPE html>
<html lang="en">
  
@include('projectManager.css')
     
<body>
<div class="main-wrapper">

<!-- partial:partials/_sidebar.html -->
@include('projectManager.sidebar')
<!-- partial -->

<div class="page-wrapper">
    <!-- partial:partials/_navbar.html -->
    @include('projectManager.header')
    <div class="page-content" style="margin-left:100px">
        <div class="row profile-body">
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-9 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Create Project Plan</h6>
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <form class="forms-sample" method="POST" action="{{ route('projectmanager.add_new_project_plan') }}">
    @csrf
    <!-- Project Name -->
    <div class="mb-3">
        <label class="form-label">Project Name</label>
        <select class="form-control" id="project_name" name="project_name" required>
            @foreach($projects as $project)
                <option value="{{ $project->project_name }}">{{ $project->project_name }}</option>
            @endforeach
        </select>
        @error('project_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!-- Plan Details -->
    <div class="mb-3">
        <label for="plandetails" class="form-label">Plan Details</label>
        <textarea class="form-control" id="plandetails" name="plandetails"></textarea>
        @error('plandetails')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    <a href="{{ route('projectManager.dashboard') }}" class="btn btn-secondary">Cancel</a>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle wrapper end -->
            <!-- right wrapper start -->
            <div class="d-none d-xl-block col-xl-3">
                <div class="row">
                </div> 
            </div>
            <!-- right wrapper end -->
        </div>
    </div>
    <!-- partial:partials/_footer.html -->
    @include('projectManager.footer')
    <!-- partial -->
</div>
</div>

<!-- core:js -->
@include('projectManager.js')

</body>
</html>
