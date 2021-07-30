@extends('admin.layouts.master')
@section('title', 'Add addon - Admin')
@section('body')
 
<section class="content">
   @include('admin.message')
    <div class="row">
        <div class="col-xs-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">{{ __('Add New Addon') }}</h3>
                </div>

                
                    
                <div class="panel-body">

                    
                    <div class="row">
                        <div class="col-xs-12">

                            <h5 class="panel-title">{{ __('UPLOAD ADDON FILE (ZIP FILE)') }} :</h5>
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                   <form action="{{ action('AddonController@installaddon') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('POST') }}

                                        <label for="twitter">Purchase Code:<sup class="redstar">*</sup></label>
                                        <div class="form-group">
                                            
                                            <input value=""  name="code" type="text" class="form-control" placeholder="Enter Purchase Code"/>
                                            <br>
                                        </div>



                                        <label for="twitter">UPLOAD ADDON FILE (ZIP FILE):<sup class="redstar">*</sup></label>
                                        <div class="form-group">
                                            
                                            <input type="file" name="addon_file" value="" class="form-control">
                                           {{--  <span class="input-group-btn">
                                              <button type="submit" class="btn btn-primary btn-block">{{ __('Install Addon') }}!</button>
                                            </span> --}}
                                            <br>
                                        </div>
                                        

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary btn-block">{{ __('Install Addon') }}!</button>
                                        </div>

                                      
                                    </form>


                                </div>
                            </div>
                        </div>
                        
                       
                    </div>

                    
                </div>

            </div>
        </div>
    </div>
</section>
@endsection




