<div class="table-responsive">
    <table class="table" id="testimonis-table">
        <thead>
            <tr>
                <th>Idcust</th>
        <th>Testimoni</th>
        <th>Star</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($testimonis as $testimoni)
            <tr>
                       <td>{{ $testimoni->IDTEST }}</td>
            <td>{{ $testimoni->TESTIMONI }}</td>
            <td>{{ $testimoni->STAR }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['testimonis.destroy', $testimoni->IDTEST], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('testimonis.show', [$testimoni->IDTEST]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('testimonis.edit', [$testimoni->IDTEST]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
