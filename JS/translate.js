function translate_ajax() {
    $.ajax({
        url: "./translate.php",
        type: "get",
        dateType: "text",
        data: {
            word: $('#word').val(),
            source: $('#source').val(),
            target: $('#target').val()
        },
        success: function(result) {
            result = result.replace(new RegExp('\r?\n', 'g'), '<br />');
            $('#result-target').html(result);
            $('.button-translate').html('Translate');
        }
    });
};

function swap() {
    if (document.getElementById("source").value != "") {
        var b = document.getElementById("source").value;
        var a = document.getElementById("target").value;
        document.getElementById("source").value = a;
        document.getElementById("target").value = b;
        if (a == b) {
            alert('Ngôn ngữ chọn chưa đúng !!!');
        }
    }
        
    return false;
}
$('.button-translate').click(function() {
    if (document.getElementById("word").value != "") {
        $('.button-translate').html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>');
        translate_ajax();
    } else {
        alert('Bạn chưa nhập văn bản cần dịch');
    }
})