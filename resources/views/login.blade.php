<x-base>
   <style>
      body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  width: 80%;
}

.login-form {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 20px;
}

.login-form h2 {
  margin-top: 0;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}

</style>

<div class="container">

    <form class="login-form" action="{{route('menu')}}">
      <h2>Iniciar sesión</h2>
      <div class="form-group">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" value="admin">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
      </div>
      <button type="submit">Iniciar sesion</button>

    </form>

  </div>


</x-base>
