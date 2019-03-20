@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <h1>Update project</h1>
    <div class="row col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{route('companies.update',[$companies->id])}}">

            {{csrf_field()}}

            <input type="hidden" name="_method" value="put">

            <div class="form-group">
            <label for="company_name">Name<span class="required">*</span></label>
                <input type="text" 
                name="name" 
                required
                placeholder="Enter Name" 
                spellcheck="false" 
                id="company_name"
                class="form-control"
                value="{{$companies->name}}"/>
            </div>

            <div class="form-group">
            <label for="company_description">Decription<span class="required">*</span></label>
            <textarea 
            style ="resize:vertical"
            placeholder="Enter Description"
            name="description" 
            id="company_description" 
            rows="5"
            class="form-control autosize-target text-left"
            spellcheck="false">
            {{$companies->description}}
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
                <li><a href="/companies/{{$companies->id}}">Back to Company</a></li>
                 <li><a href="/companies/">All Companies</a></li>
            </ol>
        </div>
   </div>
    @endsection

 