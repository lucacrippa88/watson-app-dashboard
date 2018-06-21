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

    <div class="col l2 s12">

      <select id="select1" class="filter">
        <option value="tutti" selected>Select default</option>
      </select>

      <br>

      <br><br><br>

    </div>

    <div class="col l10 s12">

      <div class="bx--data-table-v2-container" data-table-v2>

        <div class="bx--loading-overlay" id="loading-table">
          <div data-loading class="bx--loading">
            <svg class="bx--loading__svg" viewBox="-75 -75 150 150">
              <title>Loading</title>
              <circle cx="0" cy="0" r="37.5" />
            </svg>
          </div>
        </div>

      <section class="bx--table-toolbar">

        <div class="bx--toolbar-content">

          <button class="bx--toolbar-action" id="download-all">
            <i class="material-icons">save_alt</i>
          </button>

          <button class="bx--toolbar-action" id="reset-table">
            <i class="material-icons">refresh</i>
          </button>

          &ensp;&ensp;&ensp;
          <a id="create-new" href="/admin/post.php"><button class="bx--btn bx--btn--sm bx--btn--primary">Create new</button></a>
        </div>
      </section>

  <table class="bx--data-table-v2">
    <thead>
      <tr>
        <th>
          <button class="bx--table-sort-v2" data-event="sort">
            <span class="bx--table-header-label">Titolo</span>
            <svg class="bx--table-sort-v2__icon" width='10' height='5' viewBox='0 0 10 5' fill-rule='evenodd'>
              <path d='M10 0L5 5 0 0z'></path>
            </svg>
          </button>
        </th>
        <th>
          <button class="bx--table-sort-v2" data-event="sort">
            <span>Postato</span>
            <svg class="bx--table-sort-v2__icon" width='10' height='5' viewBox='0 0 10 5' fill-rule='evenodd'>
              <path d='M10 0L5 5 0 0z'></path>
            </svg>
          </button>
        </th>
        <th>
          <button class="bx--table-sort-v2" data-event="sort">
            <span>Ultima modifica</span>
            <svg class="bx--table-sort-v2__icon" width='10' height='5' viewBox='0 0 10 5' fill-rule='evenodd'>
              <path d='M10 0L5 5 0 0z'></path>
            </svg>
          </button>
        </th>
        <th>
          <button class="bx--table-sort-v2" data-event="sort">
            <span>Sezione</span>
            <svg class="bx--table-sort-v2__icon" width='10' height='5' viewBox='0 0 10 5' fill-rule='evenodd'>
              <path d='M10 0L5 5 0 0z'></path>
            </svg>
          </button>
        </th>
        <th>
          <button class="bx--table-sort-v2" data-event="sort">
            <span>Categoria</span>
            <svg class="bx--table-sort-v2__icon" width='10' height='5' viewBox='0 0 10 5' fill-rule='evenodd'>
              <path d='M10 0L5 5 0 0z'></path>
            </svg>
          </button>
        </th>
        <th>
          <button class="bx--table-sort-v2" data-event="sort">
            <span>Azioni</span>
            <svg class="bx--table-sort-v2__icon" width='10' height='5' viewBox='0 0 10 5' fill-rule='evenodd'>
              <path d='M10 0L5 5 0 0z'></path>
            </svg>
          </button>
        </th>
      </tr>
    </thead>
    <tbody id="add-post-table-here">
      <!-- Structure of the table -->
      <!-- <tr class='.post-container'><td class='.post-title'><b>1</b></td><td></td><td></td><td></td><td></td><td></td></tr> -->
    </tbody>

  </table>
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


</div><br><br><br><br><br><br>
<!-- End content -->
</main>


</div>
<!-- End fade content -->

<footer class="main-footer">
</span>
<i class="material-icons toggle-assistant">forum</i>
</footer>

<script>
loadingProcess("#fade-loader", ".fade-page");
</script>


</body>


</html>
