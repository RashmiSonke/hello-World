<html>


<head>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">


</head>



<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1"><i class="glyphicon glyphicon-plus"></i>Antipasti</a>
            </h4>
        </div>
    <div id="panel1" class="panel-collapse collapse in">
        <div class="panel-body">
     hi
            </div>
        </div>
    </div>


    



</div>


<script type="text/javascript">
var selectIds =$('#panel1,#panel2,#panel3');
$(function ($) {


    selectIds.on('hidden.bs.collapse show.bs.collapse', function () {
      $(this).prev().find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
    })
});
</script>
</body>
</html>