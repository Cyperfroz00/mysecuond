<x-dashboard>
    <div class="data">
        <div class="detail-data">
          @if (Session::has('updatesuccess'))
                <script>
                    Swal.fire({
                            icon: "success",
                            title: "Updated",
                            text: "Update Student Successful!",
                            });
                </script>
            @endif
            @if (Session::has('deletesuccess'))
                <script>
                    Swal.fire({
                            icon: "success",
                            title: "Deleted",
                            text: "Deleted Student Successful!",
                            });
                </script>
            @endif
            <table class="table table-dark table-sm">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Attendent</th>
                    <th>Activity</th>
                    <th>Exam</th>
                    <th>Total</th>
                    <th>Average</th>
                    <th>Grade</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->Attendent}}</td>
                    <td>{{$item->Activity}}</td>
                    <td>{{$item->Exam}}</td>
                    <td>{{$item->Total}}</td>
                    <td>{{$item->Average}}</td>
                    <td>{{$item->grade}}</td>
                    <td>
                        <img src="image/{{$item->profile}}" alt="" width="80px" height="110px">
                    </td>
                    <td>
                        <a href="/update/{{$item->id}}" class="btn btn-warning">Update</a>
                        <button data-bs-toggle="modal" id="btn-delete" data-remove="{{$item->id}}" data-bs-target="#exampleModal" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">
                                <span style="color: red " >Are you sure to delete student name : {{$item->name}}?</span>
                              </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                          <form action="/delete" method="POST">
                             @method('DELETE')
                             @csrf
                              <input type="hidden" value="remove_id" id="remove_id">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button class="btn btn-danger">Save Change</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</x-dashboard>