<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="<?php echo $publicJs.'axios.min.js'; ?>"></script>
    <script src="<?php echo $publicJs.'vue.js'; ?>"></script>
  </head>
  <body>
    <center>
    <div id="app" style="width:100%;margin:auto;z-index:99">
      <h1 style="text-align:center">Message</h1>
      {{ info }}
    </div>
     <img src="<?php echo $publicImage.'pleasewait1.gif'; ?>" alt="" style="width:50%;margin:auto;z-index:-1">
   </center>
  </body>
  <script type="text/javascript">
    var modal    = "<?php echo $modal ?>";
    var json     = <?php echo $data ?>;
    var url      = "<?php echo $urlApi ?>";
    var urlModal = "<?php echo $urlModal."/".$page ?>";
    var urlMenu  = "<?php echo $urlAdmin."?id=".$page."&start=0&page=1&menu=1"; ?>";
    new Vue({
        el: '#app',
        data () {
          return {
            info: null
          }
        },
        mounted () {
          axios
          .post(url+'/store', json)
          .then(response => (this.info = response["data"]["message"]))
        }
      })

      window.setTimeout(function(){
      if (modal !== '') {
         window.location.href = urlModal;
      } else {
         window.location.href = urlMenu;
      }
      }, 5000);
  </script>
</html>
