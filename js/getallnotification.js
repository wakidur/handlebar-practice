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
 // If a panel element has the ".panel-scroller" class we init
      // custom fixed height content scroller. An optional delay data attr
      // may be set. This is useful when you expect the panels height to 
      // change due to a plugin or other dynamic modification.
      var panelScroller = $('.panel-scroller');
      if (panelScroller.length) {
          panelScroller.each(function(i, e) {
           var This = $(e);
           var Delay = This.data('scroller-delay');
           var Margin = 5;

           // Check if scroller bar margin is required
           if (This.hasClass('scroller-thick')) { Margin = 0; }

           // Check if scroller bar is in a dropdown, if so 
           // we initilize scroller after dropdown is visible
           var DropMenuParent = This.parents('.dropdown-menu');
           if (DropMenuParent.length) { 
               DropMenuParent.prev('.dropdown-toggle').on('click', function() {
                  setTimeout(function() {
                     This.scroller();
                     //$('.navbar').scrollLock('on', 'div');
                  },50);
               });
               return;
           }

           if (Delay) {
             var Timer = setTimeout(function() {
                This.scroller({ trackMargin: Margin, });
               $('#content').scrollLock('on', 'div');
             }, Delay);
           } 
           else {
             This.scroller({ trackMargin: Margin, });
             $('#content').scrollLock('on', 'div');
           }

         });
      }
})


