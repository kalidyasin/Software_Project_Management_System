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

    <div class="page-content"  style="margin-left:100px">
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th class="pt-0">S. NO</th>
              <th class="pt-0">Task Name</th>
              <th class="pt-0">Project</th>
              <th class="pt-0">Description</th>
              <th class="pt-0">Start Date</th>
              <th class="pt-0">Deadline</th>
              <th class="pt-0">Status</th>
              <th class="pt-0">Progress</th>
              <th class="pt-0">Edit</th>
            </tr>
          </thead>
          <tbody>
            @php
            $count = 0;
            @endphp
            @foreach($tasks as $task)
            @php
                $count++;
            @endphp
            <tr>
              <td>{{$count}}</td>
              <td>{!! Str::limit($task->name, 20) !!}</td>
              <td>{!! $task->project ? Str::limit($task->project->name, 15) : 'N/A' !!}</td>
              <td>{!! Str::limit($task->description, 20) !!}</td>
              <td>{{$task->start_date}}</td>
              <td>{{$task->deadline}}</td>
              <td>{{$task->status}}</td>
              <td>{{$task->completion}}%</td>
              <td>
                <a class="btn btn-success" href="{{url('update_task',$task->id)}}">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
