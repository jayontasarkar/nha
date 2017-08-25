@inject('roles', 'App\Http\Services\AuthorizationService')

<form action="{{ route('settings.users.store') }}" method="POST" role="form" id="form_advanced_validation">
	{{ csrf_field() }}

	<div class="row clearfix">
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('name') ? 'error' : '' }}">
                    <input type="text" name="name" class="form-control">
                    <label class="form-label">User's FullName</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'name'])
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('phone') ? 'error' : '' }}">
                    <input type="text" name="phone" class="form-control">
                    <label class="form-label">Mobile No.</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'phone'])
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('designation') ? 'designation' : '' }}">
                    <input type="text" name="designation" class="form-control">
                    <label class="form-label">Official Designation</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'designation'])
            </div>
        </div>
        <div class="col-md-6">
            <select class="form-control show-tick" name="role_id" tabindex="-98" data-live-search="true">
                <option value="">-- Please select authorization type --</option>
                @foreach($roles->get() as $role)
	                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
	                	{{ $role->title }}
	               	</option>
                @endforeach
            </select>
            <span style="font-size: 11px; color: #F44336; margin-top: 8px; font-weight: normal;">
            	@include('layouts.backend.common.formError', ['key' => 'role_id'])
            </span>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('password') ? 'error' : '' }}">
                    <input type="password" name="password" class="form-control">
                    <label class="form-label">Login Password</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'password'])
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-float">
                <div class="form-line {{ $errors->first('password_confirmation') ? 'error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control">
                    <label class="form-label">Password Confirmation</label>
                </div>
                @include('layouts.backend.common.formError', ['key' => 'password_confirmation'])
            </div>
        </div>
    </div>

	<button type="submit" class="btn btn-primary">Save Changes</button>
</form>