function ambilDanAnalisa()
{
    let canvas = document.getElementById("wajah");
    canvas.getContext("2d");
    const dataURL = canvas.toDataURL();
    let ds = {'img':dataURL}
    $("#wajah").hide();
    $("#divLoading").show();
    $("#txtImgPreview").show();
    $("#divAlat").hide();
    document.querySelector("#txtImgPreview").setAttribute("src", dataURL);

    // axios.post('proses.php', ds).then(function(res){
    //     console.log(res.data);
    // });

    $.post('proses.php', ds, function(data){
        let obj = JSON.parse(data);
        let hasil = obj.hasil[1];
        hasil.forEach(renderHasil);

            function renderHasil(item, index){
                var ul = document.getElementById("listHasil");
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(hasil[index]));
                ul.appendChild(li);
            }
            $("#idHasil").show();
            $("#divLoading").hide();
            $("#divAlat").hide();
    });
}

function getImg()
{
    var sampul = document.querySelector('#txtInput');
    var imgPrev = document.querySelector('#txtImgPreview');
    var fileGambar = new FileReader();
    
    fileGambar.readAsDataURL(sampul.files[0]);
    
    fileGambar.onload = function(e){
        $("#divAlat").hide();
        $("#wajah").hide();
        $("#divLoading").show();
        $("#txtImgPreview").show();
        let hasil = e.target.result;
        document.querySelector("#txtImgPreview").setAttribute("src", hasil);
        let ds = {'img':hasil}
         $.post('proses.php', ds, function(data){
            let obj = JSON.parse(data);
            let hasil = obj.hasil[1];
            hasil.forEach(renderHasil);

            function renderHasil(item, index){
                var ul = document.getElementById("listHasil");
                var li = document.createElement("li");
                li.appendChild(document.createTextNode(hasil[index]));
                ul.appendChild(li);
            }
            $("#idHasil").show();
            $("#divLoading").hide();
            $("#divAlat").hide();
        });
    }
}