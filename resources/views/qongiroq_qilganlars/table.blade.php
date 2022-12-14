<div class="table-responsive">
    <table class="table" id="qongiroqQilganlars-table">
        <thead>
        <tr>
            <th>Familya</th>
        <th>Ism</th>
        <th>Sharif</th>
        <th>Tugulgan Kun</th>
        <th>Telefon Nomer</th>
        <th>Parent Telefon</th>
        <th>Manzil</th>
        <th>Oquv Yonalishi</th>
        <th>Qoshimcha Desc</th>
        <th>Recall</th>
        <th>Oquvchi Keladigan Kun</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($qongiroqQilganlars as $qongiroqQilganlar)
            <tr>
                <td>{{ $qongiroqQilganlar->familya }}</td>
            <td>{{ $qongiroqQilganlar->ism }}</td>
            <td>{{ $qongiroqQilganlar->sharif }}</td>
            <td>{{ $qongiroqQilganlar->tugulgan_kun }}</td>
            <td>{{ $qongiroqQilganlar->telefon_nomer }}</td>
            <td>{{ $qongiroqQilganlar->parent_telefon }}</td>
            <td>{{ $qongiroqQilganlar->manzil }}</td>
            <td>{{ $qongiroqQilganlar->oquv_yonalishi }}</td>
            <td>{{ $qongiroqQilganlar->qoshimcha_desc }}</td>
            <td>{{ $qongiroqQilganlar->recall }}</td>
            <td>{{ $qongiroqQilganlar->oquvchi_keladigan_kun }}</td>
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
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
