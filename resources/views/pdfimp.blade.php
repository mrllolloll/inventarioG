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
      background-color: #FFFFFF;
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
    th{
      border: 1px solid;
    }
    table{
      border: 0.1px solid;
    }
    header{
      text-align: left;
      margin-top: 10px;
      padding-bottom: 15px;
    }
    header img{
      display: inline-block;
      margin-left: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    header h2{
      display: inline-block;
      margin-left: 210px;
      margin-top: 30px;
    }

    </style>
</head>
<body>
  <header>
    <img src="images/header1.jpg" width="1000" height="52">
    <img src="css/seniat.png" width="200" height="100">
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              Seniat
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
    <br><br>
    @include('TableC.impta')
  </div>
</body>
</html>
