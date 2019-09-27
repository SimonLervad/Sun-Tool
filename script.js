let arr = [];
            let arrcop = ['', 55.495973, 9.473052, 90.6, 2, "København"];
            let arraar = ['', 56.162939, 10.203921, 90.6, 2, "Århus"];
            let arrode = ['', 55.403756, 10.402370, 90.6, 2, "Odense"];
            let arraal = ['', 57.046707, 9.935932, 90.6, 2, "Aalborg"];
            let arresb = ['', 55.476466, 8.459405, 90.6, 2, "Esbjerg"];
            let arrran = ['', 56.460584, 10.036539, 90.6, 2, "Randers"];
            let arrkol = ['', 55.676098, 12.568337, 90.6, 2, "Kolding"];
            let arrhor = ['', 55.858130, 9.847588, 90.6, 2, "Horsens"];
            let arrvej = ['', 55.711311, 9.536354, 90.6, 2, "Vejle"];
            let arrros = ['', 55.641910, 12.087845, 90.6, 2, "Roskilde"];
            arr.push(arrcop);
            arr.push(arraar);
            arr.push(arrode);
            arr.push(arraal);
            arr.push(arresb);
            arr.push(arrran);
            arr.push(arrkol);
            arr.push(arrhor);
            arr.push(arrvej);
            arr.push(arrros);

            const adaptBy = function(e) {
                dkbyer.lat.value = arr[e.target.value][1];
                dkbyer.lon.value = arr[e.target.value][2];
                dkbyer.gmt.value = arr[e.target.value][4];
                dkbyer.dkname.value = arr[e.target.value][5];
                document.dkbyer.submit();

            }

            const adaptForm = function(e) {
                minform.latitude.value = arr[e.target.value][1];
                minform.longitude.value = arr[e.target.value][2];
                minform.gmtOffset.value = arr[e.target.value][4];
                minform.name.value = arr[e.target.value][5];
            }

            const start = function() {
                document.getElementById('city').addEventListener('change', adaptForm);
                document.getElementById('byer').addEventListener('change', adaptBy);
            }
            window.addEventListener('load', start);