<div class="table-responsive">
    <table class="table" id="brands-table">
        <thead>
            <tr>
                <th>Brandname</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($brands as $brand)
            <tr>
                       <td>{{ $brand->BRANDNAME }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['brands.destroy', $brand->IDBRAND], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('brands.show', [$brand->IDBRAND]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('brands.edit', [$brand->IDBRAND]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
