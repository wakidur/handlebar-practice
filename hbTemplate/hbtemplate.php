<script id="simple-template" type="text/x-handlebars-template">
      <h1>{{title}}</h1>
      <p>{{entry}}</p>
</script>
<script id="some-template" type="text/x-handlebars-template">
    <table>
        <thead>
          <th>Username</th>
          <th>Real Name</th>
          <th>Email</th>
        </thead>
        <tbody>
            {{#users}}
                <tr>
                    <td>{{username}}</td>
                    <td>{{firstName}} {{lastName}}</td>
                    <td>{{email}}</td>
                </tr>
            {{/users}}
        </tbody>
    </table>
</script>
<script id="location-address" type="text/x-handlebars-template">
    <ul>
        <li>place_id: {{place_id}}</li>
        <li>licence: {{licence}}</li>
        <li>osm_type: {{osm_type}}</li>
        <li>osm_id: {{osm_id}}</li>
        <li>lat:{{lat}}</li>
        <li>lon:{{lon}}</li>
        <li>display_name{{display_name}}</li>
    </ul>
    <ol>
        {{#address}}
            <li>house_number:{{house_number}}</li>
            <li>road:{{road}}</li>
            <li>village:{{village}}</li>
            <li>county:{{county}}</li>
            <li>state:{{state}}</li>
            <li>postcode:{{postcode}}</li>
            <li>country:{{country}}</li>
            <li>country_code:{{country_code}}</li>
        {{/address}}
     </ol>
</script>
<script id="people-name" type="text/x-handlebars-template">
  <ul>
    {{#people}}
      <li>{{name}}</li>
    {{/people}}
  </ul>
  <p>{{group}}</script>
</script>
<script id="student" type="text/x-handlebars-template">
  <ol>
    {{#students}}
      <li>Name: {{firstName}} , {{lastName}} Age: {{age}}</li>
      
    {{/students}}
  </ol>
  
</script>

