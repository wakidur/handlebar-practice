$(function(){
	$.getJSON("data/perserJSON.json", function(data) {  
	 	var json2 = data.lang;  
	 	var obj = JSON.parse(json2);  
	 	console.log(obj.welcome);  
	});


	// $.ajax({
 //        method: "GET",
 //        url: "data/student.json",
 //        dataType: "json",
 //        success: function(data){
 //        	console.log(data);
 //            var studentObject = JSON.parse(data);
 //            console.log(studentObject);
 //            var bindHtml = "";
 //            if (studentObject != null) {

 //                bindHtml += "<table class='tblBorder style'>";
 //                bindHtml += "<tr><th>FirstName</th><th>LastName</th><th>Age</th></tr>";
 //                for (var i = 0; i < studentObject.students.length; i++) {
 //                    bindHtml += "<tr style='text-align: center;'>";
 //                    bindHtml += "<td>'" + studentObject.students[i]["firstName"] + "'</td>";
 //                    bindHtml += "<td>'" + studentObject.students[i]["lastName"] + "'</td>";
 //                    bindHtml += "<td>'" + studentObject.students[i]["age"] + "'</td>";
 //                    bindHtml += "</tr>";
 //                }
 //                bindHtml = bindHtml + "</table>";
 //                document.getElementById("tableContainer").innerHTML = bindHtml;
 //            }
 //        }
 //    })
})