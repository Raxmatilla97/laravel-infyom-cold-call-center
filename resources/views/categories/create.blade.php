@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Categories</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'categories.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    @include('categories.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Saqlash', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('categories.index') }}" class="btn btn-default">Yopish</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
