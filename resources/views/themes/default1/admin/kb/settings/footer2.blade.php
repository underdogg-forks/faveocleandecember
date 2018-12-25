@extends('themes.default1.admin.layout.kb')

@section('widget')
active
@stop
@section('footer2')
class="active"
@stop
<script type="text/javascript" src="{{asset('dist/js/SetnicEdit.js')}}"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function () {
        nicEditors.allTextAreas()
    });
</script>

@section('content')


{!! Form::model($footer2,['url' => 'post-create-footer2/'.$footer2->id, 'method' => 'PATCH','files'=>true]) !!}

<!-- <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}"> -->
<!-- table  -->

<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">{{Lang::get('lang.footer2')}}</h3> {!!
        Form::submit(Lang::get('lang.save'),['class'=>'form-group btn btn-primary pull-right'])!!}
    </div>

    <div class="box-body">

        <div class="row">


            <div class="col-md-10">

                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

                    {!! Form::label('title',Lang::get('lang.title')) !!}
                    {!! $errors->first('title', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::text('title',null,['class' => 'form-control']) !!}

                </div>

                <div class="form-group {{ $errors->has('footer') ? 'has-error' : '' }}">
                    {!! Form::label('footer',Lang::get('lang.footer')) !!}
                    {!! $errors->first('footer', '<spam class="help-block">:message</spam>') !!}
                    {!! Form::textarea('footer',null,['class' => 'form-control','size' =>
                    '128x10','id'=>'footer','placeholder'=>'Enter the description']) !!}
                </div>

            </div>

        </div>

    </div>

    @stop
    @section('FooterInclude')

    @stop

    <!-- /content -->