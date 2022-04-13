<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>Catname</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                       <td>{{ $category->CATNAME }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['categories.destroy', $category->IDCAT], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('categories.show', [$category->IDCAT]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('categories.edit', [$category->IDCAT]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
