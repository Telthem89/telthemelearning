@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="margin-top: -33px;">
                <div class="card-header bg-primary">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="confirm" method="Post" style="margin-top: -34px;" class="mb-lg-5" >
                        {{ csrf_field() }}
                        <p><br></p>
                        <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Blog Title">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="author" class="form-control" value="">
                                </div>
                        <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
                                </div>

                                  <div class="form-group">
                                    <label>Blog Content</label>
                                    <textarea type="text" name="ncontent" class="form-control" placeholder="Blog Content" id="ncontent"></textarea>
                                </div>
                           
                           <div class="form-group">
                                    <label>Upload Image</label>
                                    <input type="file" name="organisation" class="form-control" placeholder="Organisation Name">
                                </div>

                      
                        

                      
                        
                            <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group mt-3 pt-3">
                                    <button  type="submit" class="btn btn-primary telthem text-light">Confirm your details</button>
                                </div>
                            </div>
                            </div>
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
