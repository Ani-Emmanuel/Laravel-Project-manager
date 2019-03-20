@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->
      <div class="well well-lg">
        <h1>{{$projects->name}}</h1>
        <p class="lead">{{$projects->description}}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row col-sm-12 col-md-12 col-lg-12" style="margin:3px">

      <div class="row container-fluid">
            
      <form method="post" action="{{route('comments.store')}}">

            {{csrf_field()}}

            <input type="hidden" name="commentable_type" value="project">
            <input type="hidden" name="commentable_id" value="{{$projects->id}}">

            <div class="form-group">
            <label for="url">Url/Photo<span class="required">*</span></label>
                
            <textarea 
            style ="resize:vertical"
            placeholder="Enter Url/photo of the work you did"
            name="url" 
            id="url" 
            rows="2"
            class="form-control autosize-target text-left"
            spellcheck="false">
            
            </textarea>
            </div>


            <div class="form-group">
            <label for="project_comment">Comment<span class="required">*</span></label>
            <textarea 
            style ="resize:vertical"
            placeholder="Write your comment"
            name="body" 
            id="project_comment" 
            rows="3"
            class="form-control autosize-target text-left"
            spellcheck="false">
            
            </textarea>
            </div>
            
            <div class="form-group">
            <input type="submit" 
            class="btn btn-primary"
            value="submit"
            />
            </div>

        </form>
      
      
      </div>
      


     {{--  @foreach($projects->projects as $project)
        <div class="col-lg-4 col-md-4 col-sm-4">
          <h2>{{$project->name}}</h2>
          <p class="text-danger">{{$project->description}}</p>
          <p></p>
          <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View project</a></p>
        </div>
      @endforeach --}}
      </div>
</div> 

   <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{$projects->id}}/edit">Edit Project</a></li>
              <li><a href="/projects">projects</a></li>
              <!-- <li><a href="/projects/create">Create project</a></li> -->
              <br/>
              @if($projects->user_id == Auth::user()->id)
              <li>
              <a href="#"
              onclick="var result = confirm('Are you sure you want to delete this product');
              if(result){
                event.preventDefault();
                document.getElementById('delete').submit();
              }">
              Delete
              </a>
              <form id="delete" method="post" action="{{route('projects.destroy',[$projects->id])}}" style="display:none;">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="delete">
              </form>
              </li>
              @endif
              
            </ol>
          </div>
      
        
        
    @endsection

 