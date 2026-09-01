<!DOCTYPE html>
<html>
    <head>
        <title>Filtered Books</title>
    </head>
    <body>
        <h1>Filtered Book List</h1>
        <p>Prepared by: Mikko S. Bobier</p>

        @if($activeFilter)
            <p>Showing value: {{ $activeFilter }}</p>
        @else
            <p>Showing all books</p>
        @endif

        <table border="1" cellpadding="8">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Genre</th>
            </tr>

            @foreach ($books as $book)
                <tr>
                    <td>
                        <a href="{{ route('books.show', ['id' => $book['id']]) }}">{{ $book['id'] }}</a>
                    </td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                    <td>{{ $book['genre'] }}</td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('books.index') }}">Back to full list</a>
    </body>
</html>