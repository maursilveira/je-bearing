@extends('layouts.admin-app')

@section('content')
<div id="dim">
				<div id="confirm">
						<a class="ignoreDelete" href="#">X</a>

								<img src="../../../images/warning.png" alt="warning icon">
								<h2>Wait!</h2>
								<p>Are you sure you want to delete this photo?</p>
								<a id="deletePhoto" class="confirmDelete" href="../destroyMedia">Yes, Delete</a>
				</div>
				<div id="dimClick2"></div>
</div>

<section id="content">
			<div class="section-head">
					<div class="section-title">
						<h1>Edit Tool</h1>
					</div>

					<div>
            <a id="back-button" href="{{ url('/admin/tooling/list')}}">
  						<img src="../../../images/arrow.png" alt="left arrow" id="leftarrow">
              <p class="backText">BACK TO TOOLS</p>
            </a>
					</div>
			</div>

      <div>
          {!! Form::model($old, ['action' => 'ToolingController@update', 'id' => 'edit', 'files' => true]) !!}
          @foreach ($old as $tool)
          {{ Form::hidden('id', $tool->id) }}
              <fieldset class="add-name">
                <p>{!! Form::label('name', 'Name') !!}</p>
                {!! Form::text('name', $tool->name, ['class' => 'form-control', 'required' => 'required']) !!}
              </fieldset>

              <fieldset class="add-number">
                <p>{!! Form::label('number', 'Tool #') !!}</p>
                {!! Form::text('number', $tool->number, ['class' => 'form-control']) !!}
              </fieldset>

              <fieldset class="add-desc">
                <p>{!! Form::label('desc', 'Description') !!}</p>
                {!! Form::textarea('desc', $tool->desc, ['class' => 'form-control form-edit', 'size' => '50x10']) !!}
              </fieldset>

              <fieldset class="add-media">
								<p>Click on the Image to Edit</p>
								<div class="image-hover">
	                <img src="{{url($photo)}}" alt="{{ $tool->name }} image">

									@if($defaultPhoto === 1)
									<div class="edit-link">
										<div class="links">
											{!! Form::label('media', 'Add Photo') !!}
											{!! Form::file('media', ['class' => 'form-control']) !!}
										</div>
									</div>
									@else
										<div class="edit-link">
											<div class="links">
												{!! Form::label('media', 'Edit') !!}
												{!! Form::file('media', ['class' => 'form-control']) !!}
												<a class="delete" data-id="{{$tool->id}}" href="#">Delete</a>
											</div>
										</div>
									@endif
								</div>
              </fieldset>

            @endforeach
	              <a class="white-button" href="{{ url('/admin/tooling/list')}}"> CANCEL</a>
	              <button class="green-button" type="submit" name="button">SAVE</button>
            {!! Form::close() !!}
      </div>
</section>
@endsection
