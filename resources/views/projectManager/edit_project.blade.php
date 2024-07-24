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
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Category</th>
                            <th>Creator</th>
                            <th>Updater</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 0;
                        @endphp
                        @foreach($projects as $project)
                            @php
                                $count++;
                            @endphp
                            <tr>
                                <td>{{ $count }}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->status }}</td>
                                <td>{{ $project->deadline }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                <td>{{ $project->category_id }}</td>
                                <td>{{ $project->creator ? $project->creator->firstname : 'N/A' }}</td>
                                <td>{{ $project->updater ? $project->updater->firstname : 'N/A' }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('update_project', ['id' => $project->id]) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('projectManager.footer')
        <!-- partial -->
    </div>
</div>

<!-- core:js -->
@include('projectManager.js')

</body>
</html>
