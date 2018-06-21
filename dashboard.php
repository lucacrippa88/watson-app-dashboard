<!DOCTYPE html>
<html>

<head></head>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Material Design -->
<script defer src='js/material-lite.js'></script>
<script src='js/materialize.min.js'></script>
<!-- Carbon Design -->
<link rel='stylesheet' type='text/css' href='css/carbon-components.min.css' />
<script src='js/carbon-components.min.js'></script>
<!-- Admin Zone functions -->
<script src="js/functions.js"></script>
<!-- D3 for graphics -->
<script src="https://d3js.org/d3.v4.min.js"></script>

<script>
  protectPage();
  createHead();
</script>

<body>

  <div id="fade-loader" class="bx--loading-overlay" style="background-color:#FFFFFF;">
    <div data-loading class="bx--loading"><svg class="bx--loading__svg" viewBox="-75 -75 150 150"><circle cx="0" cy="0" r="37.5" /></svg></div>
  </div>

  <!-- Begin fade content -->
  <div class="fade-page mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <!-- START NAVBAR -->
    <header class="mdl-layout__header fixed"><?php include("lib/header1.html") ?></header>
    <div class="mdl-layout__drawer fixed"><?php include("lib/header2.html") ?></div>
    <div class="mdl-layout-custom__dropdown fixed dropdown"><?php include("lib/header3.html") ?></div>
    <!-- END NAVBAR -->

    <!-- Begin content -->
      <main class="mdl-layout__content">
        <div class="container"><br><br><br><br><br><br>

  <div class="row">

    <div class="col l3 s12">

      <div class="bx--module bx--module--double" style="">
        <div class="bx--module__inner">
          <div class="bx--module__content">
            Benvenuto in Admin Zone: da qui puoi gestire tutti i contenuti del sito.<br><br>
            Trovi tutte le funzioni nel menu in alto a sinistra.<br><br>
            Clicca sull'incona in basso a destra se hai bisogno di aiuto.
            <!-- <p><b>Grafico dei post pubblici</b><br><br>

              <div class="graph-container" id="graph-container1">
                <svg></svg>
                <div class="tooltip" id="tooltip1">
                <p class="amount" id="amount1">#</p>
                <p class="item" id="item1">Passa il mouse</p>
                </div>
              </div>

            </p> -->
          </div>
        </div>
      </div>

      <div class="bx--module bx--module--double" style="">
        <div class="bx--module__inner">
          <div class="bx--module__content">
            <p><b>Azioni veloci</b><br><br>
              <br>

                  <div class="row">
                      <center>
                        <button class="bx--btn bx--btn--primary" type="button" id="crea-post"><i class="material-icons" style="color:#ffffff;vertical-align:middle;">create</i>&ensp;Crea post</button>
                        <button class="bx--btn bx--btn--primary" type="button" id="lista-post"><i class="material-icons" style="color:#ffffff;vertical-align:middle;">view_stream</i>&ensp;Lista post</button>
                      </center>
                  </div>

            </p>
          </div>
        </div>
      </div>

    </div>

    <div class="col l2 s12">

      <div class="bx--module bx--module--double" style="">
        <div class="bx--module__inner">
          <div class="bx--module__content">
            <p><b>Impostazione analytics</b><br><br>
              Periodo
              <select id="start-view">
                <option value="30daysAgo" selected>Da 30 giorni fa</option>
                <option value="60daysAgo">Da 2 mesi fa</option>
                <option value="90daysAgo">Da 3 mesi fa</option>
                <option value="180daysAgo">Da 6 mesi fa</option>
                <option value="365daysAgo">Da 1 anno fa</option>
              </select>
              <select id="stop-view">
                <option value="30daysAgo" selected>A ieri</option>
                <option value="30daysAgo">A 30 giorni fa</option>
                <option value="60daysAgo">A 2 mesi fa</option>
                <option value="90daysAgo">A 3 mesi fa</option>
                <option value="180daysAgo">A 6 mesi fa</option>
                <option value="365daysAgo">A 1 anno fa</option>
              </select>
              <br>Tipo di dati
              <select id="metr-data">
                <option value="ga:sessions" selected>Sessioni</option>
                <option value="ga:avgSessionDuration">Permanenza (sec)</option>
                <option value="ga:users">Utenti</option>
              </select>
              <br>
              <button class="bx--btn bx--btn--primary" type="button" id="filter-date"><i class="material-icons" style="color:#ffffff;vertical-align:middle;">timeline</i>&ensp;Genera</button>

              <br><br>
              <section class="bx--order-footer">
                <p class="bx--order-footer-text">Aiuto!</p>
                &nbsp;
                <a href="https://support.google.com/analytics?hl=it&authuser=0#topic=3544906" target="_blank" class="bx--link">Vedi guida</a>
              </section>

            </p>
          </div>
        </div>
      </div>

    </div>

    <div class="col l7 s12">

      <div class="bx--module bx--module--double" style="">
        <div class="bx--module__inner">
          <div class="bx--module__content">
            <p><b>Grafico analytics</b><br><br>

                  <div id="chart-container"></div>
                  <div id="view-selector-container"></div>
                  <div id="embed-api-auth-container"></div>

            </p>
          </div>
        </div>
        </div>

    </div>
  </div>


  <!-- VIRTUAL ASSISTANT -->
  <div class="bx--module bx--module--double" id="virtual-assistant-container">
      <div class="bx--module__content" id="virtual-assistant">
        <p>
          <div id="messages"></div><br><br><br><br><br><br>
          <form id="chat-form">
            <input id="input-ask" type="text" name="message" value="" placeholder="Chiedimi qualcosa...">
            <button type="submit" class="bx--btn bx--btn--secondary" id="chat-button"><i class="material-icons">keyboard_return</i></button><br><br>
          </form>
        </p>
      </div>
  </div>
  <script>
    $('body').on("click",".toggle-assistant",function(){
      $('#chat-form').fadeToggle("fast");
      $('#virtual-assistant').slideToggle("fast");
    });
  </script>
<!-- VIRTUAL ASSISTANT -->

<br><br><br><br><br><br>


</div>
<!-- End content -->
</main>

</div>
<!-- End fade content -->

<footer class="main-footer">
<i class="material-icons toggle-assistant">forum</i>
</footer>


<script>
loadingProcess("#fade-loader", ".fade-page");
</script>

</body>

<script>
// Configure page
initSelect();
configurePage();
$("#crea-post").click(function(){ window.location.replace('/admin/post.php'); });
$("#lista-post").click(function(){ window.location.replace('/admin/list.php?lista=post'); });
$("#main-title").text("Dashboard");
</script>


<script>
initGA();
createGA();
$('body').on("click","#filter-date",function(){ updateGA(); });
</script>

</html>
