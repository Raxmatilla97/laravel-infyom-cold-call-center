<div class="table-responsive">
    <table class="table" id="qongiroqQilganlars-table">
        <thead>
        <tr>
        <th>F.I.SH</th>            
        <th>Telefon Nomeri</th>
        <th>Ota-ona telefoni</th>        
        <th>Oquv Yonalishi</th>        
        <th>Oquvchi Keladigan Kun</th>
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
            - @if($qongiroqQilganlar->keldimi)
            <p class="text-white bg-green" style="width: 50px; display: inline; padding: 3px;">
                {{ "Keldi!" }}
            </p>
                @else
            <p class="text-white bg-red" style="width: 50px; display: inline; padding: 3px;">
                {{ "Kelmadi!" }}
            </p>
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
