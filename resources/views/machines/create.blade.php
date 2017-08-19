@extends('layouts.master')
@section('title', 'Rsclit Update')
@section('content')
<div class="container">
<div id="formDiv" class="form-group">
        
            <form id="form1" class="" method="post">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                    <label for="machine_no"><span class="labelSpan">Machine No.</span>
                    </label>
                    <input id="machine_no" name="machine_no" class="form-control" type="text" placeholder=""><br>
                </div>
                
                <div>
                    <label for="model_no"><span class="labelSpan">Model No.</span>
                    </label>
                    <input id="model_no" name="model_no" class="form-control" type="text" placeholder=""><br>
                </div>
                
                <div>
                    <label for="package"><span class="labelSpan">Package</span>
                    </label>
                    <input id="package" name="package" class="form-control" type="text" placeholder=""><br>
                </div>

                <div>
                    <label for="date_started"><span class="labelSpan">Date Started</span>
                    </label>
                    <input id="date_started" name="date_started" class="form-control" type="datetime-local" placeholder=""><br>
                </div>
                
                <div>
                    <label for="date_finished"><span class="labelSpan">Date Finished</span>
                    </label>
                    <input id="date_finished" name="date_finished" class="form-control" type="datetime-local" placeholder=""><br>
                </div>
                <div><input type="hidden" name="date_next_rsclit" value=""></div>
                
                <div>
                    <label for="work_week"><span class="labelSpan">Work Week</span>
                    </label>
                    <input id="work_week" name="work_week" class="form-control" type="text" placeholder=""><br>
                </div>
                <button id="submitBtn" class="btn btn-success" type="submit">submit</button>
            </form>
</div>
</div>
@endsection