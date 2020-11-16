@foreach($publishers as $publisher)
    <tr>
        <td class="id-column" data-id="{{$publisher->id}}">{{$publisher->id}}</td>
        <td class="action-column">
            <a href="javascript:void(0)"><span class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>
            <a href="javascript:void(0)"><span class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>
        </td>
        <td class="publisher-name-column">{{$publisher->publishname}}</td>
        <td class="image-column"><img src="{{asset('/storage/' . $publisher->image)}}" alt="{{$publisher->image}}" style="width: 50px; height: 50px"></td>
    </tr>
@endforeach
