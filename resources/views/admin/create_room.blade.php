<!DOCTYPE html>
<html>

<style>
    label 
    {
        display: inline-block;
        width: 200px;
    }

    .div_deg
    {
        padding-top: 30px;
    }

    .div_centre
    {
        text-align: center;
        padding-top: 40px;
    }
</style>
  <head> 
    @include('admin.css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
     <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_centre">
                <h1 style="font-size: 30px; font-weight: bold;">Add Rooms</h1>
                <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">

                @csrf
                    <div class="div_deg">
                        <label>Room Title</label>
                        <input type="text" name="title">
                    </div>

                    <div class="div_deg">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    
                    <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price" step="0.01">
                    </div>

                    <div class="div_deg">
                        <label>Room Type</label>
                        <select name="type">
                            <option selected value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="suite">Suite</option>
                        </select>
                    </div>

                    <div class="div_deg">
                        <label>Free Wifi</label>
                        <select name="wifi">
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div >

                    


                    <div class="div_deg">
                        <label>Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Add Room">
                    </div>
                </form>

            </div>

</div>
        </div>  
          </div>
        @include('admin.footer')
  </body>
</html>