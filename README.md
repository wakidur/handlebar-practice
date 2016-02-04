##handlebar-practice
    Nowadays the majority of the web consists of dynamic applications in which the data keep changing frequently. As a result, there is a continuous need to update the data rendered on the browser. This is where JavaScript templating engines come to the rescue and become so useful.

#How Does it work?
  1. Handlebars takes a template with the variables and compiles it into a function.
  2. This function is then executed by passing a JSON object as an argument. This JSON object is known as context and it contains the values of the variables used in the template  3. On its execution, the function returns the required HTML after replacing the variable of the template with their corresponding values.
  3. On its execution, the function returns the required HTML after replacing the variables of the template with their corresponding values

Templates

Templates can be written both in the HTML file or separately. In the first case, they appear inside the <script> tag with a type="text/x-handlebars-template" attribute and an ID. The variables are written in double curly braces {{}} and are 

## Syntaxes
 1. Expressions: We already saw expressions in the above section. The variables used inside the templates are surrounded by double curly braces {{}} and are known as expressions

 2. HTML Escaping : Handlebars can escape the value returned by the expression. For example the character < is converted into &lt. If you don’t want Handlebars to escape a value, you have to surround the variable using triple curly braces {{{variableName}}}. For example, when the following template:

3. Comments : We can also write comments inside Handlebars templates. The syntax for Handlebars comments is {{!TypeYourCommentHere}}. However, every comment that has }} in it or any other symbol that has a special meaning in Handlebars should be written in the form {{!--TypeYourCommentHere--}}. Handlebars comments are not visible in the HTML but if you want to show them, you can use the standard HTML comment: <!--comments-->.

4. Blocks : In Handlebars, blocks are expressions that have a block opening ({{# }}) and closing ({{/}}). We’ll study in depth this topic later while focusing on helpers. For now, take a look at how an if block is written

5.Paths : Handlebars supports both normal and nested path, making it possible to look up properties nested below the current context. Handlebars also supports the ../ path segment. This segment references to the parent template scope and not to one level up in the context.

For better understanding this topic, we’ll employ the example below in which we use the each helper (discussed in details later on). As you might expect, the latter iterates over the items of an array.

6. Helpers : Even though Handlebars is a logic-less templating engine, it can execute simple logics using helpers. A Handlebars helper is a simple identifier that may be followed by parameters (separated by a space), as shown below:
   
         Custom Helpers : You can create your own helper to perform complex logics using the expression system theat Handlebars provides. There are two kinds of helper: function Helper and block helper. The first definition is meant for a single expression, while the latter is used for block expression.
 
      A. Custom function helper : The syntax for a function helper is {{helperName parameter1 parameter2 ...}}. To better understand how to proceed with the implementation, let’s create a function helper called studyStatus which returns a string that will be “passed” if passingYear < 2015 and “not passed” if passingYear >= 2015:
    
     B. Custom block helper : Custom block helpers are used in the same way as function helpers, but the syntax is a bit different. The syntax of block  helpers is

7. Partial Templates: Handlebars partial are templats that can be shared among  different templates. They are written as {{ > partialName}}. 

8. handlebars-precompilation-demo

A demo to show how handlebars precompilation works

    keep all the template files with .handlebars extension inside the templates folder.
    In the root folder run handlebars templates/ -f templatesCompiled.js
     handlebars path/to/folder-of-templates -f fpath/to/folder-of-templates/filename.js
    You will get a compiled templatesCompiled.js in the root directory.
    Insert the runtime handlebars and the compiled js file

    <script src="handlebars.runtime.js"></script>
    <script src="path/to/templatesCompiled.js"></script>

        Access the template of demo.handlebars by using

    var context = {
        "name":"Ritesh Kumar",
        "occupation" : "Developer"
    }

    var templateScript = Handlebars.templates.demo(context);

    $(body).append(templateScript);

        Run index.html on the browser to see the resultant html.

    That's it.