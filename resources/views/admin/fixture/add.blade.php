@extends('layouts.admin-app')

@section('content')
<section id="content">
			<div class="section-head">
					<div class="section-title">
						<h1>Add Fixture</h1>
					</div>

					<div>
            <a id="back-button" href="{{ url('/admin/fixture/list')}}">
  						<img src="../../../images/arrow.png" alt="left arrow" id="leftarrow">
              <p class="backText">BACK TO FIXTURE</p>
            </a>
					</div>

			</div>

				<div>

            {!! Form::model($fixture, ['action' => 'FixtureController@store', 'id' => 'add', 'files' => true]) !!}
            <fieldset class="add-name">
              <p>{!! Form::label('name', 'Name') !!}</p>
              {!! Form::text('name', '', ['class' => 'form-control', 'required' => 'required']) !!}
            </fieldset>

            <fieldset class="add-number">
              <p>{!! Form::label('number', 'Fixture #') !!}</p>
              {!! Form::text('number', '', ['class' => 'form-control']) !!}
            </fieldset>

            <fieldset class="add-media">
              <p>{!! Form::label('media', 'Media') !!}</p>
              {!! Form::file('media', ['class' => 'form-control']) !!}
            </fieldset>

						<fieldset class="add-desc">
              <p>{!! Form::label('desc', 'Description') !!}</p>
              {!! Form::textarea('desc', '', ['class' => 'form-control form-add', 'size' => '50x10']) !!}
						</fieldset>
                <a class="white-button" href="{{ url('/admin/fixture/list')}}">CANCEL</a>
								<button type="submit" class="green-button" name="button">ADD</button>
							{!! Form::close() !!}

				</div>
</section>
@endsection
