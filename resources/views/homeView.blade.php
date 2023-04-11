@extends('layout.app')

@section('content')
<div class="row mt-3">
  <div class="col col-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Advertisement</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col col-8">
    <div class="card mb-2">
      <div class="card-body">
        <h5 class="card-title">Create post</h5>
        <div class="input-group">
          <textarea class="form-control" id="user_text_input" aria-label="With textarea"></textarea>          
        </div>
        <button class="btn btn-primary mt-3" onclick="createPost()" >Post</button>
      </div>
    </div>
   <div id="postHere"></div>
  </div>
  <div class="col col2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Friends</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
@endsection