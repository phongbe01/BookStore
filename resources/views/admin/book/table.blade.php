@foreach($books as $book)
    <tr>
        <td class="action-column">
            <a href="javascript:void(0)"><span
                    class="fas fa-pencil-alt lv-data-table-edit form-edit"></span></a>
            <a href="javascript:void(0)"><span
                    class="far fa-trash-alt lv-data-table-trash form-delete"></span></a>
        </td>
        <td class="publisher-name-column">{{$book->title}}</td>x
        <td class="id-column">{{$book->price}}</td>
        <td class="id-column">{{$book->quantity}}</td>
        <td class="publisher-name-column">{{$book->author}}</td>
        <td class="publisher-name-column">{{$book->publisher}}</td>
        <td class="publisher-name-column">{{$book->category}}</td>
    </tr>
@endforeach