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