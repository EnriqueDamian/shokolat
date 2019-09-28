<script type="text/javascript" src="{{asset('local/public/assets/js/jquery-3.2.1.min.js')}}"></script>
<script>
    $('#imagen_vision').on('change', function (ev) {
        var f = ev.target.files[0];
        var fr = new FileReader();

        fr.onload = function (ev2) {
            console.dir(ev2);
            $('#contenedor1').attr('src', ev2.target.result);
        };

        fr.readAsDataURL(f);
    });

    $('#imagen_mision').on('change', function (ev) {
        var f = ev.target.files[0];
        var fr = new FileReader();

        fr.onload = function (ev2) {
            console.dir(ev2);
            $('#contenedor2').attr('src', ev2.target.result);
        };

        fr.readAsDataURL(f);
    });

    $('#imagen_historia').on('change', function (ev) {
        var f = ev.target.files[0];
        var fr = new FileReader();

        fr.onload = function (ev2) {
            console.dir(ev2);
            $('#contenedor3').attr('src', ev2.target.result);
        };

        fr.readAsDataURL(f);
    });
</script>
</html>
