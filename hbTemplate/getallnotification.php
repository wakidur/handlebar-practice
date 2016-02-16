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

<script  id="hb-fr-items" type="text/x-handlebars-template">
    <div class="media col-xs-12 col-sm-4 col-md-3 mt15 pull-left mb20">
        <div class="media-left">
            <a href="profile/{{userName}}">
                <img class="media-object img-responsive br3 w100" alt="avatar" src="images/{{picture}}" width="200" height="80">
            </a>
        </div>
        <div class="media-body">
            <a href="profile/{{userName}}"><h3 class="media-heading">{{name}}</h3></a>
            <span>{{profession}}<span>   <span>{{location}}</span>
        </div>
        <div class="col-xs-6 row mt20">
            <button class="btn btn-xs btn-alert btn-block br3" type="button" id='btn-accept' onclick="acceptRequest('{{requestId}}')">
                <span class="mn">Accept</span>
            </button>
        </div>
        <div class="col-xs-6 mt20">
            <button aria-expanded="true" id='btn-ignore' data-toggle="dropdown" class="btn btn-xs btn-dark btn-block br3" type="button" onclick="rejectRequest('{{requestId}}')">
                <span class="mn"> Reject <span class="ml5 fa fa-check"></span> </span>
            </button>
        </div>
    </div>
</script>