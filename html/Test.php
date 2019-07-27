<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        //setInterval(function(){    
            $.getJSON("employees.json",function(data){
                var employeeData='';
                $.each(data,function(key,value){
                    employeeData+='<tr>';
                    employeeData+='<td>'+value.firstName+'</td>';
                    employeeData+='<td>'+value.employeeCode+'</td>';
                    employeeData+='<td>'+value.emailAddress+'</td>';
                    employeeData+='<td>'+value.region+'</td>';
                    employeeData+='</tr>';
                });
                $("#empData").append(employeeData);
            });

        //},5000);
    });
</script>
<script>
    var previous = null;
    var current = null;
    setInterval(function() {
        $.getJSON("data.json", function(json) {
            current = JSON.stringify(json);            
            if (previous && current && previous !== current) {
                console.log('refresh');
                location.reload();
            }
            previous = current;
        });                       
    }, 2000);   
</script>
<div >
<table id="empData">
<tr>
<th>Name</th>
<th>Code</th>    
<th>Email</th>
<th>Age</th>
</tr>

</table>


</div>
