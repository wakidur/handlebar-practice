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


<script id="hb-post-image" type="text/x-handlebars-template">
    <div class="panel" id="post-status">
        <div class="panel-heading">
            <span class="panel-title">
                <span class="glyphicon glyphicon-comment"></span>
                    Post
                </span>
            <div class="panel-header-menu pull-right mr10 text-muted fs12"></div>
        </div>
        <div class="panel-body">
            <div class="media">
                <a href="{{ v.profileLink }}" class="pull-left">
                    <img alt="..." src="{{ v.profilePic }}" class="media-object mn thumbnail thumbnail-sm rounded mw40"></a>
                    <div class="media-body mb5">
                        <h4 class="media-heading"><a href="{{ v.profileLink }}">{{ v.name }}</a>
                            <small>
                                {{#each v.images}}
                                    {{#ifCond isProfilePic '==' '1'}}
                                        changed profile picture
                                    {{else}}
                                        {{#ifCond isProPic '==' '1'}}
                                            changed 
                                            <a href="profile/{{ userName }}/professional">professional profile</a> 
                                            picture
                                    {{else}}
                                           posted 
                                        {{/ifCond}}
                                    {{/ifCond}}
                                {{/each}}
                            </small>
                        </h4>
                    <p class="time"> {{ v.createdAt }}.</p>
                </div>
            </div>
            <!-- for image status update-->
            <div class="post">
                {{#each v.images}}
                <a href="/files/uploads/ori/{{ path }}"  class="magnific-image">
                    <img src="/files/uploads/{{ path }}">
                </a>
                {{/each}}
                <p id="post-{{v.id}}" class="post-text"> {{{breaklines vstat }}} </p>
            </div>
            <div class="post">
                <span id="edit-panel-{{v.id}}" style="display: none;">
                    <label class="field prepend-icon" for="name1">
                        <textarea placeholder="whats on your mind ?" name="name1" class="event-name gui-input" id="edit-{{v.id}}">{{{vstat}}}</textarea>
                        <label class="field-icon" for="name1"><i class="fa fa-pencil"></i> </label>
                    </label>
                    <input type="button" value="save" onclick="updateTextStatus('edit-{{v.id}}','{{v.id}}','{{e}}')">
                </span>
            </div>
    
            <div class="media-links">
                <span class="text-light fs12 mr10">
                    <a href="#Like" onclick="like('{{v.id}}')">
                        {{#if v.liked}}
                            <span class="text-danger" id="btn-like-{{v.id}}">Appreciated <span class="fa fa-heart"></span></span>
                        {{else}}
                            <span class="text-dark" id="btn-like-{{v.id}}">Appreciate <span class="fa fa-heart"></span></span>
                        {{/if}}
                    </a>                    
                </span>
                {{#if showReshare}}
                <span class="text-light fs12 mr10">
                    <a href="#Reshare" onclick="showReshare('reshare-img-{{v.id}}','{{v.id}}','{{resharePlace}}')">
                        <span class="text-dark">Reshare <span class="fa fa-paper-plane mr5"></span></span>
                    </a>
                </span>
                {{/if}}
                <div class="pull-right fs12 pr15 text-danger">
                    {{#if showReshare}}
                        <span class="likes mr10">
                            <a href="javascript:void(0)" class="text-danger">
                            <span class="fa fa-paper-plane mr5"></span>
                            <span id="lblRount-{{v.id}}">{{v.reshareCount}}</span>
                            </a>
                        </span>
                    {{/if}}
                    <span class="likes mr10">
                        <a href="javascript:void(0)" onclick="whoLiked('{{v.id}}')" class="text-danger">
                            <span class="fa fa-heart mr5"></span>
                            <span id="lblLikeCount-{{v.id}}">{{v.likeCount}}</span>
                        </a>
                    </span>
                    <span class="comment">
                        <span class="fa fa-comments-o mr5"></span>
                        <span id="lblCommentCount-{{v.id}}">{{ v.totalComments }}</span>
                    </span>
                    {{#if v.isOwner}}
                        <div class="btn-group postEdit">
                            <a class="dropdown-toggle text-danger ml5" data-toggle="dropdown">
                                <span class="fa fa-edit"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-persist " role="menu">
                                <li>
                                    <a href="javascript:void(0)"  onclick="showEdit('post-{{v.id}}','edit-panel-{{v.id}}', '{{v.id}}' )">Edit</a>
                                </li>
                                {{#ifCond v.reshareCount '==' '0' }}
                                <li>
                                    <a href="javascript:void(0)" onclick="deleteStatus('{{v.id}}')">Delete</a></span>
                                </li>
                                {{/ifCond}}
                            </ul>
                        </div>
                    {{/if}}
                </div>
            </div>
            <!--comment-->
            <div id="comment-{{ v.id }}" class="comment">
                {{#each v.comments}}
                    <div class="media">
                        <a href="{{commenterProfileLink}}" class="pull-left">
                            <img alt="..." src="{{ profilePic }}" class="media-object mn thumbnail thumbnail-sm rounded mw30">
                        </a>
                        <div class="media-body mb5">
                            <h4 class="media-heading"><a href="{{commenterProfileLink}}" class="pull-left">{{ commenterName }}</a> </h4>
                            <p class="time">&nbsp;{{ createdAt }}</p>
                        </div>
                        {{#if isOwner}}
                            <div class="btn-group postEdit pull-right" style="position: relative; top:-35px;">
                                <a class="dropdown-toggle text-danger ml5" data-toggle="dropdown">
                                    <span class="fa fa-remove"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-persist " role="menu">
                                    <li>
                                        <a href="javascript:void(0)" onclick="deleteCommment('{{id}}')">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        {{/if}}
                        <blockquote class="blockquote-danger">{{{ comment }}}</blockquote>
                    </div>
                {{/each}}
            </div>
                {{#if v.hasMore}}
                    <div class="col-md-12 p10 text-center">
                        <a href="{{v.singleLink}}">See More</a>
                    </div>
                {{/if}}
            <!--comment end-->
        </div>
        {{#if v.isFriend}}
        <div class="panel-footer p15 foot">           
            <div class="input-group">
                <input type="text" placeholder="Respond with a comment." class="event-name form-control" id="reply-{{ v.id }}"  data-post-id="{{ v.id }}">
                <span class="input-group-btn">
                    <button onclick="postComment('reply-{{ v.id }}')" class="btn btn-danger" type="button">Comment</button>
                </span>
            </div>
        </div>
        {{else}}
        {{#if v.isOwner}}
        <div class="panel-footer p15 foot ">           
            <div class="input-group">
                <input type="text" placeholder="Respond with a comment." class="event-name form-control" id="reply-{{ v.id }}"  data-post-id="{{ v.id }}">
                <span class="input-group-btn">
                    <button onclick="postComment('reply-{{ v.id }}')" class="btn btn-danger" type="button">Comment</button>
                </span>
            </div>
        </div>
        {{/if}}
        {{/if}}
    </div>
    </script>


<script id="hb-post-status" type="text/x-handlebars-template">
<div class="panel" id="post-status">
    <div class="panel-heading">
        <span class="panel-title"><span class="glyphicon glyphicon-comment"></span> Post </span>
        <div class="panel-header-menu pull-right mr10 text-muted fs12">            
        </div>
    </div>
    <div class="panel-body">
        <div class="media">
            <a href="{{ v.profileLink }}" class="pull-left">
                <img alt="..." src="{{ v.profilePic }}" class="media-object mn thumbnail thumbnail-sm rounded mw40">
            </a>
            <div class="media-body mb5">
                <h4 class="media-heading"><a href="{{ v.profileLink }}">{{ v.name }}</a><small> posted</small></h4>
                <p class="time">{{ v.createdAt }}.</p>
            </div>
        </div>
        <div class="post"> 
            <div class="post-text"> 
            {{#ifCond vidsType '==' 'youtube'}}
                <div class="responsive-video"><iframe allowfullscreen="" src="{{lnk}}" class="embedded-video embed-responsive-item"></iframe></div>
                <p id="post-{{v.id}}"> 
                    {{#ifCond v.resharedDesc '==' 'none'}}
                    {{else}}
                        {{{breaklines v.resharedDesc}}}
                    {{/ifCond}}
                </p>
            {{/ifCond}}
            {{#ifCond vidsType '==' 'vimeo'}}
                <div class="responsive-video"><iframe src="{{vimeoL}}" width="300px" height="300px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <p id="post-{{v.id}}">
                    {{#ifCond v.resharedDesc '!=' 'none'}}
                        {{{breaklines v.resharedDesc}}}
                    {{/ifCond}}
                </p>
            {{/ifCond}}
            {{#ifCond vidsType '==' 'slideshare'}}    
                <div class="responsive-video">iframe src="{{v.status}}" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></div>
                <p id="post-{{v.id}}">
                    {{#ifCond v.resharedDesc '!=' 'none'}}
                        {{{breaklines v.resharedDesc}}}
                    {{/ifCond}}
                </p>
            {{/ifCond}}
            {{#ifCond vidsType '==' 'link'}}
                <p id="post-{{v.id}}">{{{lnk}}} </p>
            {{/ifCond}}
            
            {{#unless vidsType}}
                <p id="post-{{v.id}}">{{{breaklines vstat }}}</p>
            {{/unless}}
            </div>
            <span id="edit-panel-{{v.id}}"  style="display: none;">


                <label class="field prepend-icon" for="name1">
                    <textarea placeholder="whats on your mind ?" name="name1" class="event-name gui-input" id="edit-{{v.id}}">{{{vstat}}}</textarea>
                    <label class="field-icon" for="name1"><i class="fa fa-pencil"></i>
                    </label>

                </label>
                <input type="button" value="save" onclick="updateTextStatus('edit-{{v.id}}','{{v.id}}','{{e}}')">
            </span>
        </div>
        <div class="media-links">
            <span class="fs12 mr10">
                <a href="#Like" onclick="like('{{v.id}}')">
                    {{#if v.liked}}
                    <span class="text-danger" id="btn-like-{{v.id}}">Appreciated <span class="fa fa-heart"></span></span>
                    {{else}}
                    <span class="text-dark" id="btn-like-{{v.id}}">Appreciate <span class="fa fa-heart"></span></span>
                    {{/if}}
                </a>

            </span>
            {{#if showReshare}}        
            <span class="fs12 mr10">
                <a href="#Reshare" onclick="showReshare('reshare-img-{{v.id}}','{{v.id}}','{{resharePlace}}')">
                    <span class="text-dark">Reshare <span class="fa fa-paper-plane mr5"></span></span>
                </a>
            </span>
            {{/if}}
            <div class="pull-right fs12 pr15 text-danger">
                {{#if showReshare}}
                <span class="likes mr10"><a href="javascript:void(0)" class="text-danger"><span class="fa fa-paper-plane mr5"></span><span id="lblRount-{{v.id}}">{{v.reshareCount}}</span></a></span>
                {{/if}}
                <span class="likes mr10"><a href="javascript:void(0)" onclick="whoLiked('{{v.id}}')" class="text-danger"><span class="fa fa-heart mr5"></span><span id="lblLikeCount-{{v.id}}">{{v.likeCount}}</span></a></span>
                <span class="comment"><span class="fa fa-comments-o mr5"></span><span id="lblCommentCount-{{v.id}}">{{ v.totalComments }}</span></span>
                {{#if v.isOwner}}
                <span class="comment">&nbsp; 
                    
                    <div class="btn-group postEdit">
                        <a class="dropdown-toggle text-danger" data-toggle="dropdown">
                            <span class="fa fa-edit"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist " role="menu">
                            <li>
                                <a href="javascript:void(0)"  onclick="showEdit('post-{{v.id}}','edit-panel-{{v.id}}', '{{v.id}}' )">Edit</a>  
                            </li>
                            {{#ifCond v.reshareCount '==' '0' }}
                            <li>
                                <a href="javascript:void(0)" onclick="deleteStatus('{{v.id}}')">Delete</a></span>
                            </li>
                            {{/ifCond}}
                        </ul>
                    </div>
                {{/if}}
                <div id="tool">
                </div>
            </div>
        </div>
        <!--comment-->
        <div id="comment-{{ v.id }}" class="comment">
            {{#each v.comments}} 
                <div class="media">
                    <a href="{{commenterProfileLink}}" class="pull-left">
                        <img alt="Profile Picture" src="{{ profilePic }}" class="media-object mn thumbnail thumbnail-sm rounded mw30">
                    </a>
                    <div class="media-body mb5">
                        <h4 class="media-heading "><a href="{{commenterProfileLink}}" class="pull-left">{{ commenterName }}</a></h4>
                        <p class="time">&nbsp;{{ createdAt }}</p>

                     </div>
                    {{#if isOwner}}
                    <div class="btn-group postEdit pull-right" style="position: relative; top:-35px;">
                        <a class="dropdown-toggle text-danger ml5" data-toggle="dropdown">
                            <span class="fa fa-remove"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist " role="menu">
                            <li>
                                <span class="comment">&nbsp;  <a href="javascript:void(0)" onclick="deleteCommment('{{id}}')">Delete</a></span>
                            </li>
                            
                        </ul>
                    </div>
                    {{/if}}
                    <blockquote class="blockquote-danger">{{{ comment }}}</blockquote>
                </div>

            {{/each}}


        </div>
        {{#if v.hasMore}}
        <div class="col-md-12 p10 text-center">
            <a href="{{v.singleLink}}">See More</a>
        </div>
        {{/if}}
        <!--comment end-->
    </div>
    {{#ifCond v.isFriend '||' v.isMutualFriend }}
    <div class="panel-footer p15 foot">       
        <div class="input-group">
            <input type="text" placeholder="Respond with a comment." class="event-name form-control" id="reply-{{ v.id }}"  data-post-id="{{ v.id }}">
            <span class="input-group-btn">
                <button onclick="postComment('reply-{{ v.id }}')" class="btn btn-danger" type="button" >Comment</button>
            </span>
        </div>       
    </div>
    {{else}}
        {{#if v.isOwner}}
        <div class="panel-footer p15 foot">
            <div class="input-group">
                <input type="text" placeholder="Respond with a comment." class="event-name form-control" id="reply-{{ v.id }}"  data-post-id="{{ v.id }}">
                <span class="input-group-btn">
                    <button onclick="postComment('reply-{{ v.id }}')" class="btn btn-danger" type="button" >Comment</button>
                </span>
            </div>
        </div>
        {{/if}}
    {{/ifCond}}
</div>
</script>



<script id="hb-post-video" type="text/x-handlebars-template">
<div class="panel" id="post-video">
    <div class="panel-heading">
        <span class="panel-title"><span class="glyphicon glyphicon-facetime-video"></span> Timeline Video! </span>
        <div class="panel-header-menu pull-right mr10 text-muted fs12">              
        </div>
    </div>
    <div class="panel-body p10">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe allowfullscreen="" src="http://www.youtube.com/embed/q94n3eWOWXM?rel=0" class="embed-responsive-item"></iframe>
        </div>
        <div class="media-links p15">
            <span class="text-light fs12 mr10"><a href="#Like" onclick="like('{{id}}')"><span class="glyphicons glyphicons-thumbs_up text-primary mr5"></span>Like</a> {{300 +}}</span>
            <!--<span class="text-light fs12 mr10"><a href="#Unlike"><span class="glyphicons glyphicons-thumbs_down text-primary mr5"></span>Unlike</a></span>-->
            <!--<span class="text-light fs12 mr10"><span class="glyphicons glyphicons-share text-primary mr5"></span> Share </span>-->
            <span class="comment"><span class="glyphicons glyphicons-chat text-primary mr5"></span> Comment </span>
        </div>
        <div class="media pb10">
            <a href="#" class="pull-left">
            <img alt="..." src="<?php echo base_url('files'); ?>/files/assets/img/avatars/4.jpg" class="media-object mn thumbnail thumbnail-sm rounded mw40"> </a>
            <div class="media-body mb5">
                <h5 class="media-heading mbn">Jessica Wong <small> - 3 hours ago</small></h5>
                <p>Omgosh  in love</p>
            </div>
        </div>
        <div class="media mtn">
            <a href="#" class="pull-left">
            <img alt="..." src="<?php echo base_url('files'); ?>/files/assets/img/avatars/3.jpg" class="media-object mn thumbnail thumbnail-sm rounded mw40"> </a>
            <div class="media-body mb5">
                <h5 class="media-heading mbn">Jessica Wong <small> - 3 hours ago</small></h5>
                <p>Omgosh Im in love</p>
            </div>
        </div>
    </div>
    <div class="panel-footer p15 foot hidden ">
        <div class="admin-form">
            <label class="field prepend-icon" for="reply1">
                <input type="text" placeholder="Respond with a comment." class="event-name gui-input" id="reply1" name="reply1">
                <label class="field-icon" for="reply1"><i class="fa fa-pencil"></i></label>
            </label>
        </div>
    </div>
</div>
</script>