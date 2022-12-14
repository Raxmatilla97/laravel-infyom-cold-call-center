<!-- Familya Field -->
<div class="form-group col-sm-6">
    {!! Form::label('familya', "O'quvchi familyasi:") !!}
    {!! Form::text('familya', null, ['class' => 'form-control']) !!}
</div>

<!-- Ism Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ism', 'Ismi:') !!}
    {!! Form::text('ism', null, ['class' => 'form-control']) !!}
</div>

<!-- Sharif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sharif', 'Sharifi:') !!}
    {!! Form::text('sharif', null, ['class' => 'form-control']) !!}
</div>

<!-- Tugulgan Kun Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tugulgan_kun', 'Tugulgan yili') !!}
    {!! Form::text('tugulgan_kun', null, ['class' => 'form-control','id'=>'tugulgan_kun']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tugulgan_kun').datetimepicker({
            format: 'YYYY',
            useCurrent: true,
            sideBySide: true,
            
        })
    </script>
@endpush

<!-- Telefon Nomer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefon_nomer', 'Aloqa uchun telefon nomeri:') !!}
    {!! Form::number('telefon_nomer', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Telefon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_telefon', 'Ota-onasi telefon nomeri:') !!}
    {!! Form::number('parent_telefon', null, ['class' => 'form-control']) !!}
</div>

<!-- Manzil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('manzil', 'Yashash manziliga oydinlik kiritish:') !!}
    {!! Form::text('manzil', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    <label>Qaysi yo'nalishda o'qimoqchiligini tanlang</label>
    <select name="oquv_yonalishi" class="form-control">
        <option value="test">option 1</option>
    </select>
</div>

<!-- Qoshimcha Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('qoshimcha_desc', "Qo'shimcha ma'lumotlar uchun:") !!}
    {!! Form::textarea('qoshimcha_desc', null, ['class' => 'form-control']) !!}
</div>


<div class="card card-primary col-sm-12">
    
    <div class="card-header">
        <h3 class="card-title">O'quvchini kelgani yoki kelmagani bo'yicha amaliyot bajarish</h3>
    </div>

    <div class="card-body">
        <div class="row">
            <!-- Oquvchi Keladigan Kun Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('oquvchi_keladigan_kun', "O'quvchi Keladigan Kun:") !!}
                {!! Form::text('oquvchi_keladigan_kun', null, ['class' => 'form-control','id'=>'oquvchi_keladigan_kun']) !!}
            </div>

            @push('page_scripts')
                <script type="text/javascript">
                    $('#oquvchi_keladigan_kun').datetimepicker({
                        format: 'YYYY-MM-DD',
                        useCurrent: true,
                        sideBySide: true
                    })
                </script>
            @endpush

            <div class="form-group col-sm-6">
                <label>O'quvchi keldimi?</label>
                <select name="oquv_yonalishi" class="form-control">
                    <option value="yoq">O'quvchi kelmadi</option>
                    <option value="ha">O'quvchi keldi</option>
                </select>
            </div>
        </div>
    </div>

</div>