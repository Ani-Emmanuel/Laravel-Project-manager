@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>{{$companies->name}}</h1>
        <p class="lead">{{$companies->description}}</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row col-sm-12 col-md-12 col-lg-12" style="margin:3px">
      @foreach($companies->projects as $project)
        <div class="col-lg-4 col-md-4 col-sm-4">
          <h2>{{$project->name}}</h2>
          <p class="text-danger">{{$project->description}}</p>
          <p></p>
          <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View project</a></p>
        </div>
      @endforeach 
      </div>
</div> 

   <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$companies->id}}/edit">Edit</a></li>
              <li><a href="/companies">Companies</a></li>
              <li><a href="/projects/create/{{$companies->id}}">Create project</a></li>
              <br/>
              <li>
              <a href="#"
              onclick="var result = confirm('Are you sure you want to delete this product');
              if(result){
                event.preventDefault();
                document.getElementById('delete').submit();
              }">
              Delete
              </a>
              <form id="delete" method="post" action="{{route('companies.destroy',[$companies->id])}}" style="display:none;">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="delete">
              </form>
              </li>
              
            </ol>
          </div>
      
        
        
    @endsection

 