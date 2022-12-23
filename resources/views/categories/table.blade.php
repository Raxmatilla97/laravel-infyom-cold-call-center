<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>Nomlanishi</th>
                <th>Surat</th>
                <th colspan="3">O'zgartirish</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $categories)
            <tr>
                <td>{{ $categories->title }}</td>
                <td>{{ $categories->image }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.edit', [$categories->id]) }}"
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
