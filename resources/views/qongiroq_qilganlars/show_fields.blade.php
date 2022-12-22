<!-- Familya Field -->
<div class="col-sm-12">
    {!! Form::label('familya', 'Familyasi:') !!}
    <p>{{ $qongiroqQilganlar->familya }}</p>
</div>

<!-- Ism Field -->
<div class="col-sm-12">
    {!! Form::label('ism', 'Ismi:') !!}
    <p>{{ $qongiroqQilganlar->ism }}</p>
</div>

<!-- Sharif Field -->
<div class="col-sm-12">
    {!! Form::label('sharif', 'Sharifi:') !!}
    <p>{{ $qongiroqQilganlar->sharif }}</p>
</div>

<!-- Tugulgan Kun Field -->
<div class="col-sm-12">
    {!! Form::label('tugulgan_kun', 'Tugulgan Kuni:') !!}
    <p>{{ $qongiroqQilganlar->tugulgan_kun }}</p>
</div>

<!-- Telefon Nomer Field -->
<div class="col-sm-12">
    {!! Form::label('telefon_nomer', 'Telefon Nomeri:') !!}
    <p>{{ $qongiroqQilganlar->telefon_nomer }}</p>
</div>

<!-- Parent Telefon Field -->
<div class="col-sm-12">
    {!! Form::label('parent_telefon', 'Ota-onasining telefon nomeri:') !!}
    <p>{{ $qongiroqQilganlar->parent_telefon }}</p>
</div>

<!-- Manzil Field -->
<div class="col-sm-12">
    {!! Form::label('manzil', 'Yashash manzili:') !!}
    <p>{{ $qongiroqQilganlar->manzil }}</p>
</div>

<!-- Oquv Yonalishi Field -->
<div class="col-sm-12">
    {!! Form::label('oquv_yonalishi', "O'qimoqchi bo'lgan yo'nalishi:") !!}
    <p>{{ $qongiroqQilganlar->oquvYonalishi->title }}</p>
</div>

<!-- Qoshimcha Desc Field -->
<div class="col-sm-12">
    {!! Form::label('qoshimcha_desc', "Qo'shimcha ma'lumotlar:") !!}
    <p>{{ $qongiroqQilganlar->qoshimcha_desc }}</p>
</div>

<!-- Recall Field -->
<div class="col-sm-12">
    {!! Form::label('recall', "Qayta telefon qilinganlik bo'yicha izoh:") !!}
    <p>{{ $qongiroqQilganlar->recall }}</p>
</div>

<!-- Oquvchi Keladigan Kun Field -->
<div class="col-sm-12">
    {!! Form::label('oquvchi_keladigan_kun', "Client keladigan Kun:") !!}
    <p>{{ $qongiroqQilganlar->oquvchi_keladigan_kun }}</p>
</div>

<!-- Oquvchi Keladigan Kun keldimi Field -->
<div class="col-sm-12">
    {!! Form::label('keldimi', "Client keldimi?:") !!}
    @if($qongiroqQilganlar->keldimi)
        <p>{{ "Client keldi, va gaplashildi!" }}</p>
    @else
        <p>{{ "Client kelmadi, qayta telefon qilish zarur!" }}</p>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', "Ma'lumotnoma yaratilgan vaqt:") !!}
    <p>{{ $qongiroqQilganlar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $qongiroqQilganlar->updated_at }}</p>
</div>

