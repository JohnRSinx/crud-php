<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="/create-participants" method="POST">
    @csrf
    <label for="">Nome</label>
    <input type="text" placeholder="Seu nome" name="name_participant">
    <input type="text" placeholder="telefone" name="phone_participant">
    <button>Enviar</button>
  </form>


</body>

</html>