@extends('layouts.app')

@section('content')

<div class="container">
    @include('layouts.partials.form_errors'
    )
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                {{ Form::open(['id' => 'post-question-form']) }}

                        @csrf

                        <!-- Title new thread -->
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, ['id'=> 'title', 'class' => 'form-control', 'placeholder' => 'Title', 'required']) }}
                    <br/>
                        {{ Form::label('category', 'Category') }}
                    <select name="category" class="form-control">

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                           <!-- <option>PlayStation 4</option> -->
                    </select>
                    <br/>
                        {{ Form::label('body', 'Body') }}
                        {{ Form::textarea('body', null, ['id'=> 'body', 'class' => 'form-control', 'placeholder' => 'What is your question?', 'required']) }}
                    <br/>
                         {{ Form::button('Post', ['class'=> 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) }}
    
                        {{ Form::close() }}

                </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
