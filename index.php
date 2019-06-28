
<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="import" href="C:\Users\wilto\OneDrive\Área de Trabalho\sidebar.html">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
<?php 
require'sidebar.php';
?>
<div class="container">
 
  <div class="row">

    <div class="col-sm-11" style="margin:30px auto;"><table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Posição</th>
                <th>Trabalho</th>
                <th>Idade</th>
                <th>data Inicio</th>
                <th>Salario</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
                <td> <i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
                   <td> <i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
                   <td> <i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
                   <td><i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
                  <td> <i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
                  <td><i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
                   <td> <i class="fa fa-eye" style="font-size: 24px;color:blue;"></i>
                     <i class=" fa fa-file-pdf-o" style="color:red;font-size: 24px;"></i>
                     <i class="fa fa-edit"style="color:green;font-size: 24px;"></i>
                     <i class="fa fa-trash-o" style="font-size: 24px;"></i>

            </td>
            </tr>
        </tbody>

    </table></div>
  </div>

</div>
  <div class="floating">
      <a href="index.html" class="float cshadow btncshadow"><i class="fa fa-plus my-float"></i></a>
        </div>
        <style type="text/css">
            .float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#FF0000;
    color:red;
    border-radius:50px;
    text-align:center;
    box-shadow: 2px 2px 3px #999;
}
.float:hover{
    background-color: #FF6347;

}
.my-float{
    margin-top:22px;
    color: white;
}
.cshadow{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.05);
}
.btncshadow:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
}
        </style>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>                                                               