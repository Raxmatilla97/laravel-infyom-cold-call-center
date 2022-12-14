@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Clientni ma'lumotlarini qayta tahrirlash</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($qongiroqQilganlar, ['route' => ['qongiroqQilganlars.update', $qongiroqQilganlar->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('qongiroq_qilganlars.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Qayta saqlash', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('qongiroqQilganlars.index') }}" class="btn btn-default">Yopish</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
