##handlebar-practice
    Nowadays the majority of the web consists of dynamic applications in which the data keep changing frequently. As a result, there is a continuous need to update the data rendered on the browser. This is where JavaScript templating engines come to the rescue and become so useful.

#How Does it work?
  1. Handlebars takes a template with the variables and compiles it into a function.
  2. This function is then executed by passing a JSON object as an argument. This JSON object is known as context and it contains the values of the variables used in the template  3. On its execution, the function returns the required HTML after replacing the variable of the template with their corresponding values.