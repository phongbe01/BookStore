@foreach($orders as $order)
    <tr>
        <td class="id-column" data-id="{{$order->id}}">{{$order->id}}</td>
        <td class="action-column">
            <a href="javascript:void(0)"><span class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>
            <a href="javascript:void(0)"><span class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>
        </td>
        <td class="first-name-column">{{$order->name}}</td>
        <td class="email-column">{{$order->address}}</td>
        <td class="role-column"><span class="badge badge-{{$order->color}}">{{$order->statusname}}</span></td>
        <td class="role-column">{{number_format($order->total)}}đ</td>
        <td class="email-column">{{$order->created_at}}</td>
    </tr>
@endforeach
