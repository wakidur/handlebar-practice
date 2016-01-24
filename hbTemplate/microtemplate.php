<script id="grid-row-template" type="text/x-handlebars-template">
    {{#h}}
        <tr data-uid="{{uid}}">
            <td class="photo">
                <img src="images/{{EmployeeID}}.jpg" alt="{{EmployeeID}}" />
            </td>
            <td class="details">
                <span class="title">{{Title}}</span>
                <span class="description">Name: {{ FirstName }} {{ LastName }}</span>
                <span class="description">Country: {{ Country }} </span>
            </td>
            <td class="employeeID"> {{ EmployeeID }}</td>
        </tr>
    {{/h}}
</script>