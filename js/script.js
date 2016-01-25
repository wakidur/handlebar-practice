$( function() {
   
    $.ajax({
        method: "GET",
        url: "data/posts.json",
        dataType: "json",
        success: function(data){
             var raw_template = $('#simple-template').html(),
                 template = Handlebars.compile(raw_template),
                 placeHolder = $("#main");
            $.each(data,function(index,element){
          // Generate the HTML for each post
          var html = template(element);
          // Render the posts into the page
          placeHolder.append(html);
        });
        }
    });
});
$( function() {
   
    $.ajax({
        method: "GET",
        url: "data/code.json",
        dataType: "json",
        success: function(data){
            var source   = $("#some-template").html(),
                template = Handlebars.compile(source);
            $("#content-placeholder").html(template(data));    
        }
    });
    $.ajax({
        method: "GET",
        url: "data/location.json",
        dataType: "json",
        success: function(data){
            var source   = $("#location-address").html(),
                template = Handlebars.compile(source);
            $("#locationIp").html(template(data));    
        }
    });
    $.ajax({
        method: "GET",
        url: "data/people.json",
        dataType: "json",
        success: function(data){
            var source   = $("#people-name").html(),
                template = Handlebars.compile(source);
            $("#peopleName").html(template(data));    
        }
    });
    $.ajax({
        method: "GET",
        url: "data/student.json",
        dataType: "json",
        success: function(data){
            var source   = $("#student").html(),
                template = Handlebars.compile(source);
            $("#studentInfo").html(template(data));    
        }
    });
    
    $.ajax({
        method: "GET",
        url: "data/employees.json",
        dataType: "json",
        success: function(data){
            var source   = $("#employees").html(),
                template = Handlebars.compile(source);
            $("#employeesInfo").html(template(data));    
        }
    });
})