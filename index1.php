<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="images/favicon.ico">
    <title></title>
    <link rel="stylesheet" href="css/style.css"/>
    
</head>
<body>
        <div id="example">
            <div class="demo-section k-content">
                <select id="emplooyeesDropDown" class="employeesDropDownWrap" style="width: 100%;">
                	
                </select>
            </div>
            <div>
                <table id="employeesTable">
                	 <thead>
                         <tr>
                            <th>
                                Picture
                            </th>
                            <th>
                                Details
                            </th>
                            <th>
                                ID
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                    </tbody>
                   <!--  <colgroup>
                        <col class="photo" />
                        <col class="details"/>
                        <col/>
                    </colgroup> -->
                   
                    
                </table>
            </div>
            <script src="lib/jquery-1.11.3.js"></script>
            <script src="lib/handlebars-v4.0.5.js"></script>
            <!-- <script src="lib/data-script.js"></script>-->
            <script id="grid-row-template" type="text/x-handlebars-template">
                 {{#h}}
			    <tr data-uid="{{uid}}">
			        <td class="photo">
			            <img src="images/{{EmployeeID}}.jpg" alt="{{EmployeeID}}" />
			        </td>
			        <td class="details">
			            <span class="title">{{Title}}</span>
			            <span class="description">Name: {{ FirstName }} {{ LastName }}</span>
			            <span class="description">Country: {{ Country }} </span>
			        </td>
			        <td class="employeeID"> {{ EmployeeID }}</td>
			    </tr>
			    {{/h}}
			</script>
			<script id="dropdown-item-template" type="text/x-handlebars-template">
			   <option value="volvo">
				    <img src="images/{{EmployeeID}}.jpg" alt="{{EmployeeID}}" />
				    <h3>{{FirstName}} {{LastName}}</h3>
				    <p>{{Title}}</p>
			    </option>
			</script>
            <script>
                $(document).ready(function() {
                	$.ajax({
				        method: "GET",
				        url: "data/index1.json",
				        dataType: "json",
				        success: function(data){
				            var source   = $("#grid-row-template").html(),
				                template = Handlebars.compile(source);
				            $("#employeesTable").html(template(data));
				              var source1   = $("#dropdown-item-template").html(),
				                template1 = Handlebars.compile(source1);
				            $("#emplooyeesDropDown").html(template1(data));    
				        }
				    });
                    
                    // $("#employeesTable").kendoGrid({
                    //     dataSource: dataSource,
                    //     rowTemplate: Handlebars.compile($("#grid-row-template").html()),
                    //     height: 370
                    // });

                    // $("#emplooyeesDropDown").kendoDropDownList({
                    //     dataTextField: "FirstName",
                    //     dataValueField: "EmployeeID",
                    //     template: Handlebars.compile($("#dropdown-item-template").html()),
                    //     dataSource: dataSource,
                    //     height: 320
                    // });
                });
            </script>

            
        </div>


</body>
</html>