function saveUrlAsFile(url, fileName) {
    fileName += Math.floor((Math.random() * 1000000)).toString();
    fileName += ".png";
    var link = document.createElement("a");
    link.setAttribute("href", url);
    link.setAttribute("download", fileName);
    link.click();
}

$(function() {
    document.getElementById("do_capture").onclick = function () {
        console.log('ffefefef');
        var img = document.getElementById("view_img");
        var loader = document.getElementsByClassName("loader")[0];
        loader.style.display = "block";
        var view_modal = document.getElementsByClassName("view_modal")[0];

        var body = document.getElementsByTagName("body")[0];
        html2canvas(body).then(function (canvas) {
            var video_image = canvas.toDataURL("image/png");
            video_image = video_image.split(' ').join('+');
            img.src = video_image;

            img.onload = function () {  // убираем значок загрузки
                loader.style.display = "none";
            }

        });

        //view image MODAL

        //change to block from none
        img.style.display = "block";
        view_modal.style.display = "block";
        //body.style.overflowY = "hidden";

        //hide modal
        window.onclick = function(event) {
            if (event.target == view_modal) {
                view_modal.style.display = "none";
                body.style.overflowY = "auto";
                img.src = '';
            }
        }

        $('span#download').one('click',function(e){
            var viewImg = $("#view_img");
            var viewImgSrc = document.querySelector('img#view_img').src;
            viewImgSrc = viewImgSrc.replace("data:image/png;base64,", "");
            viewImgSrc = viewImgSrc.split(' ').join('+');
            loader.style.display = 'block';
            var downloadBtn = $('span#download');
            downloadBtn.css("cursor", "not-allowed");

            $.post("file.php", {viewImgSrc: viewImgSrc}, function (result_data) {
                downloadBtn.css("cursor", "pointer");
                loader.style.display = 'none';
                if(!result_data) {
                    Swal.fire(
                        'Успешно!',
                        'Ваша фото сохранена в базу данных',
                        'success'
                    );
                    saveUrlAsFile(viewImg.attr('src'), 'AR_image_');
                }
                else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Упс...',
                        text: 'Что-то пошло не так, попробуйте заново!'
                    })
                }
                // console.log(result_data);
            });
        });
    }
});