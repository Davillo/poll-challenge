let btnAddOption = $("#addOption");
let optionsCount = 0;

btnAddOption.on('click', function(){

     $("#optionsTable")
         .find("tbody")
         .append(
             $("<tr>")
                 .append($("<td>").append(`${optionsCount + 1}`))
                 .append(
                     $(`<td class="col-sm-2">`).append(
                         `<input type="text" class="form-control" name="options[${optionsCount}]" id="${optionsCount}"/>`
                     )
                 )
         );

        optionsCount++;
});
