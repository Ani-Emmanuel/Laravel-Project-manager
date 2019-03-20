@extends('layouts.app')
@section('content')
<div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
    <h1>Create new company</h1>
    <div class="row col-sm-12 col-md-12 col-lg-12">
        <form method="post" action="{{route('companies.store')}}">

            {{csrf_field()}}

            <!-- <input type="hidden" name="_method" value="put"> -->

            <div class="form-group">
            <label for="company_name">Name<span class="required">*</span></label>
                <input type="text" 
                name="name" 
                required
                placeholder="Enter Name" 
                spellcheck="false" 
                id="company_name"
                class="form-control"
                />
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
                <li><a href="/companies">Companies</a></li>
            </ol>
        </div>
   </div>
@endsection