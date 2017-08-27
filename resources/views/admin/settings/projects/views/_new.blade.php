<form action="{{ route('settings.projects.store') }}" method="POST" role="form" id="form_advanced_validation">
	{{ csrf_field() }}

	<div class="row clearfix">
        <div class="col-md-12">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('title') ? 'error' : '' }}">
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                    <label class="form-label">Project Title</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'title'])
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('desc') ? 'desc' : '' }}">
                    <textarea name="desc" class="form-control" rows="4">{{ old('desc') }}</textarea>
                    <label class="form-label">Project Description</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'desc'])
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('location') ? 'error' : '' }}">
                    <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                    <label class="form-label">Project Location</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'location'])
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('starting_date') ? 'error' : '' }}">
                    <input type="text" name="starting_date" class="datepicker form-control" placeholder="Please choose project starting date..." data-dtp="dtp_DopE2">
                </div>
                @include('layouts.backend.common.formError', ['key' => 'starting_date'])
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('ending_date') ? 'error' : '' }}">
                    <input type="text" name="ending_date" class="datepicker form-control" placeholder="Please choose project estimated ending date..." data-dtp="dtp_DopE2">
                </div>
                @include('layouts.backend.common.formError', ['key' => 'ending_date'])
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('status') ? 'error' : '' }}">
                    <select name="status" class="form-control">
                        <option value="">___ Select Current Status ___</option>
                        <option value="0" {{ old('status') == 1 ? 'selected' : '' }}>Work in progress</option>
                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Successfully Completed</option>
                    </select>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'status'])
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('capacity') ? 'error' : '' }}">
                    <input type="number" name="capacity" class="form-control" value="{{ old('capacity') }}">
                    <label class="form-label">Project Capacity</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'capacity'])
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-5 col-md-5">
            <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
        </div>
    </div>

</form>