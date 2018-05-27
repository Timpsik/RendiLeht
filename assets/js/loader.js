(function() {
      function getScript(url,success){
        var script=document.createElement('script');
        script.src=url;
        var head=document.getElementsByTagName('head')[0],
            done=false;
        script.onload=script.onreadystatechange = function(){
          if ( !done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete') ) {
            done=true;
            success();
            script.onload = script.onreadystatechange = null;
            head.removeChild(script);
          }
        };
        head.appendChild(script);
      }
        getScript('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',function(){
            getScript('https://www.gstatic.com/charts/loader.js',function(){});
            getScript('http://rendilehtveeb.tk/assets/js/charts.js',function(){});
            getScript('http://rendilehtveeb.tk/assets/js/maps.js',function(){
                getScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyDokQNZshQlGU0CI4ukO4yj4xpeli-S5Jc&callback=myMap',function(){});
            });
            getScript('http://rendilehtveeb.tk/assets/js/offline.min.js',function(){});
            getScript('http://rendilehtveeb.tk/assets/js/offline.js',function(){});
            getScript('http://rendilehtveeb.tk/assets/js/kuulutuste_arvu_leidja.js',function(){});
        });
    })();