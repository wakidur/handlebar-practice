<script id="handlebars-demo" type="text/x-handlebars-template">
    {{!--Babic example--}}
    <div class="hello">
        <h2>Babic example</h2>
        <p>My name is {{name}}.</p>
        <p>I am a {{occupation}}.</p>
    </div>
</script>
<script id="handlebars-Expressions" type="text/x-handlebars-template">
    {{!-- handlebars-Escaping --}}
    <div class="hello">
        <h2>handlebars-Expressions</h2>
        <p>My First name is {{firstName}}.</p>
        <p>My list name is {{lastName}}.</p>
    </div>
</script>
<script id="handlebars-Escaping" type="text/x-handlebars-template">
    {{!-- handlebars-Escaping --}}
    <div class="hello">
        <h2>handlebars-Escaping</h2>
        <p>{{language}}.----- {{{adjective}}}</p> 
    </div>
</script>
<script id="handlebars-Comments" type="text/x-handlebars-template">
    {{!-- handlebars-Escaping --}}
    <div class="hello">
        <h2>handlebars-Comments</h2>
        <h3>{{comments}}</h3> 
    </div>
</script>
<script id="handlebars-Block" type="text/x-handlebars-template">
    {{!-- handlebars-Block --}}
    <div class="hello">
    <h2>handlebars-Block</h2>
    {{#if block}}
        <h2>Yes This value is Boolean</h2>
    {{/if}}
    </div>
</script>
<script id="handlebars-Paths" type="text/x-handlebars-template">
    {{!-- handlebars-Paths --}}
    <div class="hello">
    <h2>handlebars-Block</h2>
        This article is available on {{website.name}}.<br>
        {{#each names}}
            I am a {{../occupation}}. My name is {{firstName}} {{lastName}}. my websit name {{../website.name}}<br>
        {{/each}}
    </div>
</script>
 