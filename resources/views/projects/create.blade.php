@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <h1>Create project</h1>
    <div class="row col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{route('projects.store')}}">

            {{csrf_field()}}

            <!-- <input type="hidden" name="_method" value="put"> -->

            <div class="form-group">
            <label for="project_name">Name<span class="required">*</span></label>
                <input type="text" 
                name="name" 
                required
                placeholder="Enter Name" 
                spellcheck="false" 
                id="project_name"
                class="form-control"
                />
            </div>

                @if($companies == null)
            <input type="hidden" 
                name="company_id" 
                value="{{$company_id}}"
                />
                @endif


                @if($companies != null)
                <div class="form-group">
                <label for="company-id">Select Company</label>
                <select name="company-id" id="company-id" class='form-control'>
                @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
                </select>
                </div>
                @endif


            <div class="form-group">
            <label for="project_description">Decription<span class="required">*</span></label>
            <textarea 
            style ="resize:vertical"
            placeholder="Enter Description"
            name="description" 
            id="project_description" 
            rows="5"
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
</div> 

  <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/projects">projects</a></li>
            </ol>
        </div>
   </div>
@endsection