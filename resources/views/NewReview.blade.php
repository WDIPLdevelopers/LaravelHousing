@include('common.header')

<div class='container'>
    <div class='row'>
        <div class="col-md-8">
        {!!Form::open(['route'=>'review.store'])!!}
        <div class="col-md-12">
            <h1>Add QC Review</h1>
        </div>
        
        <div class='col-md-6 form-group'>
            {!! Form::label('date','File Review Date',['class'=>'col-sm-6 control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::text('reviewdate',null,['placeholder'=>'Review Date', 'class'=>'form-control input-append date', 'id'=>'datepicker3']) !!}
        </div>

        
        <div class='col-md-6  form-group'>
            {!! Form::label('review','Review By',['class'=>'col-sm-6 control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::select('reviewbyid',$data,null,['placeholder'=>'Select Review By','class'=>'form-control col-sm-6']) !!}
        </div>

        
        <div class='col-md-6 form-group'>
            {!! Form::label('type','Review Type',['class'=>'col-sm-6 control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::select('reviewtypeid',$reviewType,null,['placeholder'=>'Select Review type', 'class'=>'form-control col-sm-6']) !!}
        </div>

        
        <div class='col-md-6 form-group'>
            {!! Form::label('program','Program  Type',['class'=>'col-sm-6 control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::select('programtypeid',$programType,null,['placeholder'=>'Select Program Type', 'class'=>'form-control col-sm-6']) !!}
        </div>

        
        <div class='col-md-6 form-group'>
            {!! Form::label('action','Action Type',['class'=>'col-sm-6 control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::select('actiontypeid',$actionType,null,['placeholder'=>'Select Action Type', 'class'=>'form-control col-sm-6']) !!}
        </div>

        
        <div class='col-md-6 form-group'>
            {!! Form::label('effecetive','Effective Action Date ',['class'=>'control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::text('efectiveactiondate',null,['placeholder'=>'Enter Effective Action Date', 'class'=>'form-control input-append date', 'id'=>'datepicker']) !!}
        </div>

        
        <div class='col-md-6 form-group'>
            {!! Form::label('annual','Annual Inception Date',['class'=>'control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::text('annualinceptiondate',null,['placeholder'=>'Enter Annual Inception Date', 'class'=>'form-control input-append date', 'id'=>'datepicker1']) !!}
        </div>

        
        <div class='col-md-6 form-group'>
            {!! Form::label('failed','Failed Inception Date',['class'=>'control-label']) !!}
        </div>
        <div class='col-md-6 form-group'>
            {!! Form::text('failedinceptiondate',null,['placeholder'=>'Enter Failed Inception Date', 'class'=>'form-control input-append date', 'id'=>'datepicker2']) !!}
        </div>
        
        
        <div class='col-md-6 form-group'>
            {!! Form::submit('Create Review',['class'=>'btn btn-primary']) !!}
        </div>


        {!!Form::close()!!}
         </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#datepicker,#datepicker1,#datepicker2').datepicker({
            autoclose: true
        });
        $('#datepicker3').datepicker().datepicker("setDate", new Date());
    });
</script>
@include('common.footer')