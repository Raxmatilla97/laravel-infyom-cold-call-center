<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <form class="col-6" action="">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="O'quvchi ism familyasini kiriting" name="search">
                </div>
                <button class="btn btn-primary">Qidirish</button>
            </form>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table" id="qongiroqQilganlars-table">
        <thead>
        <tr>
        <th>F.I.SH</th>            
        <th>Telefon Nomeri</th>
        <th>Ota-ona telefoni</th>        
        <th>O'quv Yonalishi</th>        
        <th>O'quvchi Keladigan Kun</th>
            <th colspan="3">O'zgartirish</th>
        </tr>
        </thead>
        <tbody>
        @foreach($qongiroqQilganlars as $qongiroqQilganlar)        
            <tr class="bd-callout" 
                @if($qongiroqQilganlar->keldimi)
                    style="border-left: 10px solid green;"
                @else 
                    style="border-left: 10px solid red;" 
                @endif>
                <td>{{ $qongiroqQilganlar->familya }} 
                    {{ $qongiroqQilganlar->ism }} 
                    {{ $qongiroqQilganlar->sharif }}
                </td>                    
            <td>{{ $qongiroqQilganlar->telefon_nomer }}</td>
            <td>{{ $qongiroqQilganlar->parent_telefon }}</td>            
            <td>{{ $qongiroqQilganlar->oquvYonalishi->title }}</td>            
            <td>{{ date('d-M', strtotime($qongiroqQilganlar->oquvchi_keladigan_kun)) }} 
            - @if(\Carbon\Carbon::now()->lte($qongiroqQilganlar->oquvchi_keladigan_kun))
                <p class="text-white bg-warning" style="width: 50px; display: inline; padding: 3px;">
                    {{ "Kelishi kutulmoqda!" }}
                </p>
                @else                    
                        @if($qongiroqQilganlar->keldimi)
                            <p class="text-white bg-green" style="width: 50px; display: inline; padding: 3px;">
                                {{ "Markazga keldi!" }}
                            </p>
                        @else
                            <p class="text-white bg-red" style="width: 50px; display: inline; padding: 3px;">
                                {{ "Kelmadi!!!" }}
                            </p>
                        @endif
                    
                @endif
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['qongiroqQilganlars.destroy', $qongiroqQilganlar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('qongiroqQilganlars.show', [$qongiroqQilganlar->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('qongiroqQilganlars.edit', [$qongiroqQilganlar->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Aniq ochirmoqchimisiz?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>

                
        @endforeach
        </tbody>
    </table>
</div>

<style>
   
.bd-callout {
    border-left: 1px solid #c74747;
    border-left-width: 0.55rem;
}

</style>
