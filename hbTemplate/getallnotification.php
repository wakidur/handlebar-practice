<script id="hb-noti-items" type="text/x-handlebars-template">
    <li class="media">
        <a class="media-left" href="{{id}}" target="_blank">
            <img src="images/{{actionBy.profilePic}}" class="media-object mn thumbnail thumbnail-sm rounded mw50">
        </a>
        <div class="media-body">
            <h5 class="media-heading">
                <a href="{{id}}">{{actionBy.name}}</a> <small class="text-muted"></small>
            </h5>
            <a href="{{id}}" >
            <p>{{message}}</p>
                </a>
                <h5 class="media-heading">
            <small>{{ createdAt }}</small>
            </h5>
            </div>
        </li>
    
</script>