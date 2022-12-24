@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Qo'ng'iroq qilgan bo'yicha ro'yxatga kiritish</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">



        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'qongiroqQilganlars.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('qongiroq_qilganlars.fields')
                </div>

            </div>

            <div class="card-footer">
                 <a href="{{ route('qongiroqQilganlars.index') }}" class="btn btn-default">Orqaga qaytish</a>
                {!! Form::submit('Saqlash!', ['class' => 'btn btn-success ', 'style' => 'float: right;']) !!}
               
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
