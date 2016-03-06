(function($) {

  if(document.getElementById('userGate')) {
    /*************************************
    * userGate
    **************************************/
    var userGateVue = new Vue({
      el: '#userGate',
      data: {
        error: '',
        success: '',
        warning: '',
        sites: '',
        nonce: wpdata.nonce,
        ajax: wpdata.ajax_url
      },
      methods: {
        getUrl: function () {

          this.warning='loading';

          $.ajax({
            method: "POST",
            url: this.ajax,
            data: {
              'action': 'getUserUrl',
              'nonce': this.nonce
            },
            dataType: 'json',
            success:function(data) {
              if( data.status=='success' ) {
                var result = data.data;
                if(result instanceof Object) {
                  var sites = Object.keys(result).map(function (key) {return result[key]});
                  userGateVue.sites = sites;
                }
                else {
                  location.href=result;                  
                }
              }
              else {
                userGateVue.error = data.message;
              }
            },
            error:function(err) {
              userGateVue.warning='';
              userGateVue.error = 'Error! ' + err.responseText;
              console.log(err);
            },
            complete:function(data) {
              userGateVue.warning=null;
            }
          });

        }
      }
    });

    userGateVue.getUrl();
  }

})(jQuery); // Fully reference jQuery after this point.
