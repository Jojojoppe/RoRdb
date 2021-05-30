function rordb_put_filecontent_in_div(fid, did){
    var html_file = document.getElementById(fid);
    var file = html_file.files[0];
    var reader = new FileReader();
    reader.onload = function(e){
        var content = e.target.result;
        var html_div = document.getElementById(did);
        html_div.innerText = content;
    };
    reader.readAsText(file);
}

function rordb_put_imgcontent_in_img(fid, iid, did){
    var html_file = document.getElementById(fid);
    var file = html_file.files[0];
    var reader = new FileReader();
    reader.onload = function(e){
        var content = e.target.result;
        var html_img = document.getElementById(iid);
        html_img.src = content;
        var html_div = document.getElementById(did);
        html_div.value = content;
    };
    reader.readAsDataURL(file);
}