@extends('layouts.masters.projects')

@section('content')
<br /><br />Estimates<br />
@foreach($projects as $project)

insert into costings (project_id, paymentphase_id, reference,link,created_at,updated_at) values ('{{ $project->id }}','{{ $project->paymentphase_id }}','{{ $project->estimate_number }}','{{ $project->estimate_link }}','<?php echo date("Y-m-d H:i:s"); ?>','<?php echo date("Y-m-d H:i:s"); ?>');<br />
@endforeach
<br /><br />Invoices<br />
@foreach($projects as $project)

insert into costings (project_id, paymentphase_id, reference,link,created_at,updated_at) values ('{{ $project->id }}','{{ $project->paymentphase_id }}','{{ $project->invoice_number }}','{{ $project->invoice_link }}','<?php echo date("Y-m-d H:i:s"); ?>','<?php echo date("Y-m-d H:i:s"); ?>');<br />
@endforeach

@stop