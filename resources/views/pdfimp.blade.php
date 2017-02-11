<html>
<head>
  <title>Listado de registro</title>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
    footer table tr td{
      border: none;
    }
    footer table tr{
      border: none;
    }
    footer table{
      border: none;
    }
    td{
      text-align: center;
      border: 1px solid;
    }
    tr{
      border: 1px solid;
    }
    table{
      border: 1px solid;
    }

    </style>
</head>
<body>
  <header>
    <h1></h1>
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              Direccion de informatica
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <div id="content">
    @include('TableC.impta')
  </div>
</body>
</html>
