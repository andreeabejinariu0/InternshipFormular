<!DOCTYPE html>
<html>
<head>
    <title>Formular</title>
    <script src="{{ asset('js/form.js') }}"></script>
</head>
<body>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <!-- Aici avem formul unde introducem datele -->
    <form id="myForm" method="POST" action="/store">
        @csrf
        <label for="nume">Nume:</label>
        <input type="text" name="nume" id="nume" required>
        <br>

        <label for="prenume">Prenume:</label>
        <input type="text" name="prenume" id="prenume" required>
        <br>

        <label for="data_nasterii">Data nasterii:</label>
        <input type="date" name="data_nasterii" id="data_nasterii" required>
        <br>

        <label for="comentarii">Comentarii:</label>
        <textarea name="comentarii" id="comentarii"></textarea>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>