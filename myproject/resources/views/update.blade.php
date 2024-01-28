<x-dashboard>
    <div class="data">
        <div class="detail-data">
            @if (Session::has('success'))
                <script>
                    Swal.fire({
                            icon: "success",
                            title: "success",
                            text: "Update Student Successful!",
                            });
                </script>
            @endif
            
            <div class="data-title">
                <h3>Update Student</h3>
            </div>
            <div class="add">
                <form action="/add-data" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">ID </label>
                    <input type="text" name="" value="{{$id}}" id="" placeholder="ID">
                    
                    <label for="">Name </label>
                        @if($errors->has('name'))
                            <span class="text-danger" style="font-size: 14px">require text only</span>
                        @endif   
                    <input type="text" name="name" value="{{$update_data->name}}"  class="@if($errors->has('name')) is-invalid @endif" id="name" placeholder="Name:">

                    <label for="">Gender</label>
                        @if($errors->has('gender'))
                            <span class="text-danger" style="font-size: 14px">require select</span>
                        @endif  
                    <select name="gender" id="block">
                        <option value="Male" @if($update_data->gender == "Male") selected @endif >Male</option>
                        <option value="Female" @if($update_data->gender == "Female") selected @endif >Female</option>
                    </select>

                    <label for="">Attendent</label>
                        @if($errors->has('attendent'))
                          <span class="text-danger" style="font-size: 14px">require score or number</span>
                        @endif
                    <input type="text" name="attendent" value="{{$update_data->Attendent}}"  class="@if($errors->has('attendent')) is-invalid @endif" id="" placeholder="Attendent:">

                    <label for="">Activity</label>
                        @if($errors->has('activity'))
                            <span class="text-danger" style="font-size: 14px">require score or number</span>
                         @endif
                    <input type="text" name="activity" value="{{$update_data->Activity}}" class="@if($errors->has('activity')) is-invalid @endif" id="" placeholder="Activity:">

                    <label for="">Exam</label>
                         @if($errors->has('exam'))
                            <span class="text-danger" style="font-size: 14px">require score or number</span>
                         @endif
                    <input type="text" name="exam" value="{{$update_data->Exam}}" class="@if($errors->has('exam')) is-invalid @endif" id="" placeholder="Exam:">

                    <label for="">Profile</label>
                        @if($errors->has('profile'))
                            <span class="text-danger" style="font-size: 14px">require type jpg,png,gif,jpeg</span>
                        @endif
                    <input type="file" name="profile" class="@if($errors->has('profile')) is-invalid @endif" id="">
                    <img src="{{url('image/'.$update_data->profile)}}" alt="Profile" width="80px" height="110px">
                    <button class="btn-lightblue" type="submit">Update</button>
                    <button class="btn btn-danger" type="reset">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>