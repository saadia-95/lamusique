@extends('layouts.app')

@section('content')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>

				<div class="panel-body">
					<table>
						<tr>
							<th>Name</th>
							<th>Roletype</th>
							<th>Edit Roletype</th> 
						</tr>
						<tr>
							@foreach ($users as $us)
							<tr>

							    <td>{{ $us->name }}</td>
							    <td>{{ $us->roletype }} </td>
							    <td>
							    	<select>
							    		<option value="0">0</option>
							    		<option value="1">1</option>
							    	</select>
							    	<div class="butt">
		                                <button type="submit" class="btn btn-primary">
		                                    Update
		                                </button>
		                            </div>
							    </td>
							</tr>

							@endforeach
						</tr>
					</table>
				</div>
				
			</div>
		</div>
		
	</div>

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Upload Songs</strong></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" /*action="{{ route('login') }}"*/>

                        <div class="song-form">
                            <label class="col-md-4 control-label">Song</label>

                            <div class="col-md-6">
                                <input class="form-control">
                            </div>
                        </div>

                        <div class="song-form">
                            <label class="col-md-4 control-label">Artist</label>

                            <div class="col-md-6">
                                <input class="form-control">
                            </div>
                        </div>

                        <div class="song-form">
                            <label class="col-md-4 control-label">Genre</label>

                            <div class="col-md-6">
                                <input class="form-control">
                            </div>
                        </div>

                        <div class="song-form">
                            <label class="col-md-4 control-label">Mood</label>

                            <div class="col-md-6">
                                <input class="form-control">
                            </div>
                        </div>

                        <div class="song-form">
                            <label class="col-md-4 control-label">Filepath</label>

                            <div class="col-md-6">
                                <input class="form-control">
                            </div>
                        </div>

                        <div class="song-form">
                            <div class="col-md-8*/ /*col-md-offset-4" style="float: right; margin-right: 20%;">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
</div>

@endsection
