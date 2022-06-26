<html>
<head>
  <style>
    <link rel="stylesheet" href="<?php echo asset('pdf.css')?>" type="text/css">
    <strong i="7">@page</strong> { margin: 100px 25px; }
    header { position: fixed; top: -26px; left: 0px; right: 0px; background-color: rgb(252, 0, 0); height: 60px; text-align: center}
    footer { position: fixed; bottom: -40px; left: 0px; right: 0px; background-color: rgb(255, 0, 0); height: 50px; }
    p { page-break-after: always; left: 100px;}
    p:last-child { page-break-after: never; }
    h6{margin: 30px 20px; text-align: right;}
    h5{margin: 30px 65px; text-align: justify; }
    h4{margin: 30px 15px; text-align: center;}
    ul{margin: 25px 60px; text-align: justify; text-align: left;}

  </style>
</head>
<body>
  <header>Red Temática de Investigación Por Colaboración <br>__________________________ <br>Desarrollo Organizacional y Empresarial <br></header>
  <footer><img width="100%" src={{URL::asset('Logo/ITCJ.jpg')}}/> </footer>
  <main>
    
                    <br>                      
                    <h6>{{$minuta->lugar}},{{$minuta->fecha}}<br></h6>
                    <h5><b>De: </b>{{$minuta->de}}<br></h5>
                    <h5><b>Para: </b>{{$minuta->para}}<br></h5>
                    <h5><b>Saludo: </b>{{$minuta->saludo}}</h5>  
                    <h5><b>Asunto: </b>{{$minuta->asunto}}<br></h5>
                    <h5><b>Agenda: </b> {{$minuta->agenda}}<br></h5>
                    <h5><b>Temas: </b> {{$minuta->temas}}<br></h5>
                    <h5><b>Acuerdos: </b>{{$minuta->acuerdos}}<br></h5>
                    <h5><b>Acciones: </b>{{$minuta->acciones}}<br></h5>
                    <h4>_____________<br></h4>
                    <h4>{{$minuta->firma}}<br></h4>
           

  </main>
</body>
</html>