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
<script id="handlebars-Each-helper" type="text/x-handlebars-template">
    {{!-- handlebars-Each-helper --}}
    <div class="hello">
    <h2>handlebars-Each-helper</h2>
        {{#each countries}}
            <ul>
                <li> <a href"{{this}}.com">{{this}}</a></li>
            </ul>
        {{/each}}
        {{#each authorName}}
            <ol>
                <li>{{firstName}} --- {{lastName}}</li>
            </ol>
        {{/each}}
    </div>
    <div class="hello">
    <h2>handlebars-Each-helper. The index of the array’s element can be rendered by using {{@index}}</h2>
        {{#each countries}}
            <ul>
                <li> <a href"{{this}}.com">{{@index}} : {{this}}</a></li>
            </ul>
        {{/each}}
        {{#each authorName}}
            <ol>
                <li>Name :{{@index}} : {{this.firstName}}  --- {{this.lastName}}</li>
            </ol>
        {{/each}}
    </div>
</script>
<script id="handlebars-If-helper" type="text/x-handlebars-template">
    
    {{!-- handlebars-If-helper --}}
    <div class="hello">
        <h2>handlebars-If-helper</h2>
        {{#if companyName}}
            The company Name are present. <br>
                {{#each companyName}}
                   {{@index}} : {{this}} <br>
                {{/each}} 
        {{else}}
            The  company Name are not present.
        {{/if}}
        
        {{#if company}}
            The  company  are present. <br>
                {{#each company}}
                   {{@index}} : {{this}} <br>
                {{/each}} 
        {{else}}
            The  company  are not present.
        {{/if}}
            
            
    </div>
</script>
<script id="handlebars-Custom-function-helper" type="text/x-handlebars-template"> 
    {{!-- handlebars-Custom-function-helper --}}
    <div class="hello">
        <h2>handlebars-Custom-function-helper</h2>
        {{#each students}}
        {{name}} has <strong> {{studyStatus passingYear}} </strong>{{passingYear}} .<br>
        {{/each}} 
                
        {{#each office}}
            {{name}} has <strong> {{ Year}} </strong> .<br>
           {{ stringText name}} has <strong> {{Year}} </strong>{{passingYear}} .<br>
        {{/each}}   
                
                
    </div>
</script>
<script id="handlebars-Custom-block-helper" type="text/x-handlebars-template"> 
    {{!-- handlebars-Custom-block-helper --}}
    <div class="hello">
        <h2>handlebars-Custom-block-helper</h2>
        {{#Block block }}
            {{name}} has <strong> {{passingYear}} </strong> .<br>
        {{/Block}}          
    </div>
</script>

<script id="handlebars-demo" type="text/x-handlebars-template">
  {{> partialTemplate website="sitepoint"}}<br>
  {{> partialTemplate website="www.sitepoint.com"}}
</script>
<script id="handlebars-Partial-Templates" type="text/x-handlebars-template"> 
    {{!-- handlebars-Partial-Templates --}}
    <div class="hello">
        <h2>handlebars-Partial-Templatesr</h2>
        {{> partialTemplate website="sitepoint"}} <br>
        {{> partialTemplate website="www.sitepoint.com"}}         
    </div>
</script>

 