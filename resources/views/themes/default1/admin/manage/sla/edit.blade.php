@extends('themes.default1.layouts.admin')

@section('Manage')
class="active"
@stop

@section('manage-bar')
active
@stop

@section('sla')
class="active"
@stop

@section('HeadInclude')
@stop
<!-- header -->
@section('PageHeader')

@stop
<!-- /header -->
<!-- breadcrumbs -->
@section('breadcrumbs')
<ol class="breadcrumb">

</ol>
@stop
<!-- /breadcrumbs -->
<!-- content -->
@section('content')

<!-- open a form -->

		{!! Form::model($slas,['url' => 'sla/'.$slas->id, 'method' => 'PATCH']) !!}

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
               <div class="box-body">


                       <div class="box-header">
                        <h2 class="box-title">{{Lang::get('lang.edit')}}</h2>{!! Form::submit(Lang::get('lang.save'),['class'=>'pull-right btn btn-primary'])!!}</div>


                 <!-- Name text form Required -->
                       <div class="box-body table-responsive no-padding"style="overflow:hidden;">
                       <!-- <table class="table table-hover" style="overflow:hidden;"> -->
                        <div class="row">
                          <div class="col-md-6">
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

		                     {!! Form::label('name',Lang::get('lang.name')) !!}
			                 {!! $errors->first('name', '<spam class="help-block">:message</spam>') !!}
			                 {!! Form::text('name',null,['class' => 'form-control']) !!}
			             </div>
		              </div>

                <!-- Grace Period text form Required -->
                         <div class="col-md-6">
		              <div class="form-group {{ $errors->has('grace_period') ? 'has-error' : '' }}">

			           {!! Form::label('grace_period',Lang::get('lang.grace_period')) !!}
		               {!! $errors->first('grace_period', '<spam class="help-block">:message</spam>') !!}
			           {!! Form::select('grace_period',['10'=>'10 Hours','15'=>'15 Hours','20'=>'20 hours','24'=>'One Day'],null,['class' => 'form-control']) !!}
			          </div>
		            </div>

<!-- status radio: required: Active|Dissable -->
                     <div class="col-md-6">
		          <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">

			       {!! Form::label('status',Lang::get('lang.status')) !!}&nbsp;
			       {!! $errors->first('status', '<spam class="help-block">:message</spam>') !!}
			       {!! Form::radio('status','1',true) !!}{{Lang::get('lang.active')}}&nbsp;&nbsp;
			       {!! Form::radio('status','0') !!}{{Lang::get('lang.disabled')}}
			</div>


<!-- Transient:	checkbox :  SLA can be overridden on ticket transfer or help topic change  -->

		<div class="form-group {{ $errors->has('transient') ? 'has-error' : '' }}">
			 {!! Form::checkbox('transient') !!}
			{!! Form::label('transient',Lang::get('lang.transient')) !!}
			{!! $errors->first('transient', '<spam class="help-block">:message</spam>') !!}


		</div>

<!-- Ticket Overdue Alerts:	 Disable overdue alerts notices. (Override global setting)  -->

		<div class="form-group {{ $errors->has('ticket_overdue') ? 'has-error' : '' }}">
			{!! Form::checkbox('ticket_overdue') !!}
			{!! Form::label('ticket_overdue',Lang::get('lang.ticket_overdue_alert')) !!}
			{!! $errors->first('ticket_overdue', '<spam class="help-block">:message</spam>') !!}

			</div>
		</div>
		</div>

<!-- Admin Note  : Textarea :  -->
         <div class="row">
            <div class="col-md-12">
		    <div class="form-group">

			{!! Form::label('admin_note',Lang::get('lang.admin_notes')) !!}
			{!! Form::textarea('admin_note',null,['class' => 'form-control','size' => '30x5']) !!}
		     </div>
		</div>
		</div>

</div>
</div>
</div>
</div>
</div>
</div>

<!-- close form -->

{!! Form::close() !!}

@stop
</div><!-- /.box -->
@section('FooterInclude')

@stop
@stop
<!-- /content -->
