<div class="w3-bar">
<div class="w3-bar-item w3-right w3-text-white w3-hover-red"
     onclick="minimise('setting')"><i class="fas fa-times"></i></div>
</div>

<div id="name"><i class="fas fa-cog"></i> Setting</div>

<div id="setting_container" class="w3-row">

    <div class="w3-row w3-col l4 m4 s12 w3-margin-bottom w3-margin-left" onclick="x.style.display='block'">
        <div class="w3-col s2 m4">
            <i class="far fa-image"></i>
        </div>
        <div class="w3-col s10 m8 w3-left">
            Wallpaper
        </div>
    </div>

    <div id="wall_container" class="w3-display-middle w3-white w3-card w3-col l4 m6 s11" style="">
    <div class="w3-bar w3-blue">
        <div class="w3-bar-item">Select image</div>
        <div class="w3-bar-item w3-right w3-hover-red"  onclick="x.style.display='none'"><i class="fa fa-times"></i></div>
    </div>
    <div class="w3-margin-top w3-margin-bottom w3-padding">
        <input type="file" id="wallpaper" class="w3-input w3-margin-bottom">
        <button class="w3-button w3-blue" onclick="x.style.display='none'">Change</button>
    </div> 
    </div>

</div>

<script>
        var fileInput = document.getElementById("wallpaper");
        var view = document.getElementById('home');
        var view1 = document.getElementById('menu');

        fileInput.addEventListener('change', function (e) {
            var url = URL.createObjectURL(e.target.files[0]);
            view.style.background = "url(" + url + ")";
            view.style.backgroundSize = "cover";
            view1.style.background = "url(" + url + ")";
            view1.style.backgroundSize = "cover";
        });
        

        
        let x = document.getElementById('wall_container');
        x.style.display="none";
        
</script>

<!--4285F4, #FBBC05, #34A853, #EA4335-->