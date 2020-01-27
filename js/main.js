(function() {
    var nameValue = "";
    $("input[id=Name]").change(function(){
        nameValue = $(this).val();
    });

    $("#subttiles").hide();
    $("button.showSub").on("click", function () {

        var list = $('#sub-list li:gt(4)');
        list.hide();
        $("#subttiles").show();
        $('a#myList-toggle').on("click", function() {
            //list.slideToggle(400);
            list.show();
            $(this).remove();
            return false;
        });

    });

});