<table>
    <thead>
        <tr>
            <th>Figure Name</th>
            <th>Figure Code</th>
            <th>Figure Brand</th>
            <th>Figure Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($figures as $figure)
        <tr>
            <td>{{ $figure->figureName }}</td>
            <td>{{ $figure->figureCode }}</td>
            <td>{{ $figure->figureBrand }}</td>
            <td>{{ $figure->figureType }}</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
