<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
            <tr>
                <th>Custname</th>
        <th>Custaddr</th>
        <th>Custphone</th>
        <th>Custemail</th>
        <th>Custidentity</th>
        <th>Custbirth</th>
        <th>Custpict</th>
        <th>Custgender</th>
        <th>Custcompany</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                       <td>{{ $customer->CUSTNAME }}</td>
            <td>{{ $customer->CUSTADDR }}</td>
            <td>{{ $customer->CUSTPHONE }}</td>
            <td>{{ $customer->CUSTEMAIL }}</td>
            <td>{{ $customer->CUSTIDENTITY }}</td>
            <td>{{ $customer->CUSTBIRTH }}</td>
            <td>{{ $customer->CUSTPICT }}</td>
            <td>{{ $customer->CUSTGENDER }}</td>
            <td>{{ $customer->CUSTCOMPANY }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['customers.destroy', $customer->IDCUST], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('customers.show', [$customer->IDCUST]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('customers.edit', [$customer->IDCUST]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
