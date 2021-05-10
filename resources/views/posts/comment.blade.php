

<div class="row">
    <div class="col-lg-10 col-md-10 sm-12">
        <div class="row justify-content-start">
            <i class="fa fa-user fa-3x m-3"></i>
            <h6 class="font-danger bg-blue my-auto"> Random User</h3>
        </div>
        <p>{{ $comment -> comment }} my comment is right here</p>
        <div class="row">
            <p class="mr-auto"></p>
            <p class=" ml-auto">{{ $comment->created_at }}</p>
        </div>
    </div>
</div>
        
