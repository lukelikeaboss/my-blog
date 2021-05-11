@extends('layouts.master')

@section('title', $project->name)


@section('content')


<div class="container-fluid">

    @if (session('message'))
    <div class="alert alert-success" role="alert">
    {{ session('message') }}
    </div>
   <script> launchModal();</script>
@endif

        <!-- Row with a list of categories-->
    <div class="row my-3">
        <a href="#" class=" btn btn-outline-secondary rounded-pill mx-1">nmae</a>     
        <a href="#" class=" btn btn-outline-secondary rounded-pill mx-1">nmae</a>     
        <a href="#" class=" btn btn-outline-secondary rounded-pill mx-1">nmae</a>     
        <a href="#" class=" btn btn-outline-secondary rounded-pill mx-1">nmae</a>     
       <a href="#" class=" btn btn-outline-secondary rounded-pill mx-1">nmae</a>     
   
    </div>
    <!-- end of row with list of categories-->
    <!--main contnet-->
    <div class="row justify-content-center">
        <div class=" col-lg-10 col-md-10 col-sm-12">
            <img src="{{ asset('images/brabus.jpg') }}" class="img-fluid"
            style="max-height:400px">
        </div>
    </div>
    <div class="row justify-content-center">
        <h3>{{ $project->title }}</h3>
    </div>
    <div class="row justify-content-center">
        <div class=" col-lg-8 col-md-8 col-sm-12">
            <p>{{ $project->description }}</p>

            <button type="button" class="btn btn-primary fa fa-smile" data-toggle="modal" data-target="#myModal">
                Launch demo modal
              </button>
              <button type="button" class="btn btn-success" onclick="launchsweetalert()" data-target="#myModal"> Launch sweet button</button>
        
        (-:)
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">

              
        </div>

    </div>


</div>

<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      
        <div class="modal-body">
          <img src="{{ asset('images/Winter road-rafiki.svg') }}" alt="You did good"/>
          <p> Here is Your comment has been added successfully. Thank you for your contribution.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             
      </div>
    </div>
  </div>

<!-- end of content-->


@endsection

@section('scripts')
<script>
function launchModal()
{

    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
}
function launchsweetalert   ()
{
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
        });
}
</script>

@endsection