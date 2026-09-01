<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Informations</title>
</head>
<body>
    <h1>
        {{ $book['title'] }}
    </h1>
    <p>Author: {{ $book['author'] }}</p>
    <p>Year: {{ $book['year'] }}</p>
    <p>Genre: {{ $book['genre'] }}</p>
    <p>Prepared by: Mikko S. Bobier</p>

    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>

