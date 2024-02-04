<x-dashboard>
    <div class="data">
        <div class="detail-data">
            @if (Session::has('success'))
                <script>
                    Swal.fire({
                            icon: "success",
                            title: "success",
                            text: "Insert Student Successful!",
                            });
                </script>
            @endif
            <div class="data-title">
                <h3>Add Student</h3>
            </div>
            <div class="add">
                <form action="/add-data" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="">Name </label>
                        @if($errors->has('name'))
                            <span class="text-danger" style="font-size: 14px">require text only</span>
                        @endif   
                    <input type="text" name="name" class="@if($errors->has('name')) is-invalid @endif" id="name" placeholder="Name:">

                    <label for="">Gender</label>
                        @if($errors->has('gender'))
                            <span class="text-danger" style="font-size: 14px">require select</span>
                        @endif  
                    <select name="gender" id="block">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <label for="">Attendent</label>
                        @if($errors->has('attendent'))
                          <span class="text-danger" style="font-size: 14px">require score or number</span>
                        @endif
                    <input type="text" name="attendent" class="@if($errors->has('attendent')) is-invalid @endif" id="" placeholder="Attendent:">

                    <label for="">Activity</label>
                        @if($errors->has('activity'))
                            <span class="text-danger" style="font-size: 14px">require score or number</span>
                         @endif
                    <input type="text" name="activity" class="@if($errors->has('activity')) is-invalid @endif" id="" placeholder="Activity:">

                    <label for="">Exam</label>
                         @if($errors->has('exam'))
                            <span class="text-danger" style="font-size: 14px">require score or number</span>
                         @endif
                    <input type="text" name="exam" class="@if($errors->has('exam')) is-invalid @endif" id="" placeholder="Exam:">

                    <label for="">Profile</label>
                        @if($errors->has('profile'))
                            <span class="text-danger" style="font-size: 14px">require type jpg,png,gif,jpeg</span>
                        @endif
                    <input type="file" name="profile" class="@if($errors->has('profile')) is-invalid @endif" id="">
                  
                    <button class="btn-lightblue" type="submit">Submit</button>
                    <button class="btn-clear" type="reset">Reset</button>
                    <button class="btn-lightblue" type="submit" ><a href="/view" >View Student</a></button>
                </form>
            </div>
        </div>
    </div>
</x-dashboard>