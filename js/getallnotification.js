$(function(){
    $.ajax({
        method: "POST",
        dataType: 'JSON',
        url: "data/getAllNotifications.json",
        success: function (response) {
            var count = 0
            $('#notification').html('');
            $.each( eval(response), function (i, v) { 
                if (v.id) {
                    console.log(v.id);
                    $('.not-found').hide();
                    var source = $("#hb-noti-items").html();
                    var temp = Handlebars.compile(source);
                    $('#notification').prepend(temp(v));
                    console.log(temp(v));
                    count = v.tCount;
                    console.log(count);
                } else {
                    $('.not-found').html("you dont have any notification yet!");
                }
            })
            $('.lbl-count').html(count)

        },
        error: function() {
            console.log("There are some problem");
        },
        complete: function(){
            console.log("Good job you got your proper result");
        }
    });
    function clearNoti(){
    console.log('dsa');
    httpRequest('backend/clearNotification',{},function (res) {
        if(res.success) {

            //$('.notification-container').html('<li class="no-notification-text">You dont have any notification</li>');
            $('.lbl-count').html('0');
        }
    })
}
})


