function loadDetails(obj){
    const id = obj.id;
    let l = details[id];
    console.log(l);
    document.getElementById("trending").style.display="none";
    document.getElementById("best-sellers").style.display="none";
    document.getElementById("product-details").style.display="grid";
    var img1 = document.getElementById("img1");
    img1.src=l['img1'];
    var img2 = document.getElementById("img2");
    img2.src=l['img2'];
    var img3 = document.getElementById("img3");
    img3.src=l['img3'];
    var img4 = document.getElementById("img4");
    img4.src=l['img4'];
}

function back(){
    document.getElementById("trending").style.display="grid";
    document.getElementById("best-sellers").style.display="grid";
    document.getElementById("product-details").style.display="none";
}