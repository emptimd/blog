<table class="table table-responsive" id="productImages-table">
    <thead>
        <th>Product Id</th>
        <th>Path</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productImages as $productImages)
        <tr>
            <td>{!! $productImages->product_id !!}</td>
            <td>{!! $productImages->path !!}</td>
            <td>
                {!! Form::open(['route' => ['productImages.destroy', $productImages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productImages.show', [$productImages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productImages.edit', [$productImages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>