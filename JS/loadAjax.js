function load_ajax() {
    $.ajax({
        url: "./actions.php",
        type: "get",
        dateType: "text",
        data: {
            wordEV: $('#wordEV').val(),
            wordVE: $('#wordVE').val(),
            wordVV: $('#wordVV').val(),
            dictionary: $('#dictionary').val()
        },
        success: function(result) {
            $('#result').html(result);
        }
    });
}