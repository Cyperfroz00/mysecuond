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
                        <button class="btn btn-danger">Delete</button>
                        <a href="/add" class="btn btn-warning">Home</a>
                      
                    </td>
                </tr>
                @endforeach
                <!-- Button trigger modal -->
                  <button type="button" value="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </table>
        </div>
        
</x-dashboard>