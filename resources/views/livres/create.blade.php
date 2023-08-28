
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <div class="container">
        <form class="contact-form" action="{{ route('livres.store') }}" method="post">
            @csrf
            <!-- Champs du formulaire -->
        
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            </div>
            <div>
                <label for="author">Author:</label>
                <input type="text" name="author" id="author " value="{{ old('author') }}"  required>
            </div>
            <div>
                <label for="isbn">Isbn:</label>
                <input type="number" name="isbn" id="isbn" value="{{ old('isbn') }}" required>
            </div>
            <div>
                <label for="published_date">Published_date:</label>
                <input type="date" name="published_date" id="published_date" value="{{ old('published_date') }}" required>
                <button type="submit">Ajoutez</button>
            </div>
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </form>
    </div>
</body>

</html>