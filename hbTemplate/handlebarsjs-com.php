<script id="blockExpressions-1" type="text/x-handlebars-template">
    {{#list people}}
        {{firstName}} ---- {{lastName}} ---- {{dob}} ---- {{address}}
    {{/list}}

</script>



<script id="blockExpressions-2" type="text/x-handlebars-template">
    <div class="post">
        <h1> By {{fullName authore}} </h1>
        <div class="body"> {{body}} </div>
        <h2>Comments</h2>
        
        {{#each comments}}
            <h3> By {{fullName authore}} </h3>
            <div class="body">{{body}}</div>
        {{/each}}
     </div>
</script>



<script id="Handlebars-path-1" type="text/x-handlebars-template">
    {{!-- Handlebars Paths --}}                
    <div clsss="entry">
        <h1>{{description}}</h1>        
        <h2> By {{student.name}} # {{student.id}} </h2>
        <div class="body">
            {{bodys}}
        </div>
    </div>

</script>


<script id="Handlebars-Paths-2" type="text/x-handlebars-template">
    <h1> Comments of all</h1>
    <div class="allComments">
    {{#each website}}
        <h1> <a href="/post/{{../occupation}} # {{id}}">{{name}} Description: {{../occupation}} {{id}}</a> </h1>
        <p>{{country}}</p>
    {{/each}}
    </div>

</script>