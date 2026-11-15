<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Laravel 12</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2177c7;
            color: #c733ae;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            color: #12172b;
            margin-bottom: 20px;
        }
        form {
            background: #038680;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: left;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            color: #0d4d34;
            font-size: 14px;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #000000;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="number"]:focus, select:focus {
            border-color: #72007c;
            outline: none;
            box-shadow: 0 0 5px rgba(141, 47, 3, 0.801);
        }
        button[type="submit"] {
            width: 100%;
            background-color: #0e2acc;
            color: rgb(49, 126, 75);
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 10px;
        }
        button[type="submit"]:hover {
            background-color: #550cdd;
        }
        h3 {
            margin-top: 20px;
            color: #1f0419;
            background: #57008a;
            padding: 10px 20px;
            border-radius: 6px;
            border: 1px solid #360099;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Calculadora - Laravel 12</h2>

    <form action="{{ route('calculadora.calcular') }}" method="POST">
        @csrf

        <div>
            <label for="valor1">Primer número:</label>
            <input type="number" id="valor1" name="valor1"
                   step="any" value="{{ old('valor1') }}" required>
            @error('valor1')
                <div style="color: red; font-size: 13px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="valor2">Segundo número:</label>
            <input type="number" id="valor2" name="valor2"
                   step="any" value="{{ old('valor2') }}" required>
            @error('valor2')
                <div style="color: red; font-size: 13px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion" required>
                <option value="">Seleccione...</option>
                <option value="sumar" @selected(old('operacion') === 'sumar')>Sumar</option>
                <option value="restar" @selected(old('operacion') === 'restar')>Restar</option>
                <option value="multiplicar" @selected(old('operacion') === 'multiplicar')>Multiplicar</option>
                <option value="dividir" @selected(old('operacion') === 'dividir')>Dividir</option>
            </select>
            @error('operacion')
                <div style="color: red; font-size: 13px; margin-top: 4px;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Calcular</button>
    </form>

    @isset($resultado)
        <h3>Resultado: {{ $resultado }}</h3>
    @endisset
</body>
</html>