<!DOCTYPE html>
<html>

<head></head>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Material Design -->
<script src='js/material-lite.js'></script>
<script src='js/materialize.min.js'></script>
<!-- Carbon Design -->
<link rel='stylesheet' type='text/css' href='css/carbon-components.min.css' />
<script src='js/carbon-components.min.js'></script>
<!-- Admin Zone functions -->
<script src="js/functions.js"></script>
<script src="js/functions-upload.js"></script>
<!-- Quill text editor css and js -->
<link rel="stylesheet" href="css/quill.css">
<script src="js/quill.js"></script>

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

          <div class="col l3 s12"><br>

            <select id="select1">
              <option value="" disabled selected>Sezione del post (*)</option>
            </select>

            <select id="select2">
              <option value="" disabled selected>Categoria del post (*)</option>
            </select>

            <br>

            <input type="checkbox" id="check1" /><label for="check1"></label>
            <input type="checkbox" id="check2" /><label for="check2"></label>
            <input type="checkbox" id="check3" /><label for="check3"></label>

            <br><br><br>


          </div>


          <div class="col l9 s12">


          <!-- BEGIN TABS -->
          <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

            <div class="mdl-tabs__tab-bar hide-mobile">
                <a href="#base-panel" class="mdl-tabs__tab is-active">Informazioni base</a>
                <a href="#avanzate-panel" class="mdl-tabs__tab">Informazioni avanzate</a>
                <a href="#evento-panel" class="mdl-tabs__tab">Gestione evento</a>
                <a href="#media-panel" class="mdl-tabs__tab">Gestione media</a>
            </div>

            <div class="mdl-tabs__tab-bar hide-desktop">
                <a href="#base-panel" class="mdl-tabs__tab is-active">Base</a>
                <a href="#avanzate-panel" class="mdl-tabs__tab">Avanzate</a>
                <a href="#evento-panel" class="mdl-tabs__tab">Evento</a>
                <a href="#media-panel" class="mdl-tabs__tab">Media</a>
            </div>


            <div class="mdl-tabs__panel is-active" id="base-panel">

              <br>

              <div class="row">

                <div class="col l6 s12">
                  <div class="input-field"><i id="text1-img" class="material-icons prefix">title</i>
                    <input id="text1" type="text" data-length="" class="validate" name="text1"><label for="text1"></label>
                  </div>

                  <div class="input-field"><i id="url-img" class="material-icons prefix" style="cursor:pointer;">all_inclusive</i>
                    <input id="url" type="text" data-length="" name="url" disabled><label for="url"></label>
                  </div>
                </div>

                <div class="col l6 s12">
                  <div class="input-field"><i id="text0-img" class="material-icons prefix">short_text</i>
                    <input id="text0" type="text" data-length="" class="validate"><label for="text0"></label>
                  </div>
                </div>

              </div>

              <label for="textarea1"></label>
              <br>
              <div class="input-field" id="textarea1">
              </div><br>

              <div class="input-field">
                <textarea id="textarea2" class="materialize-textarea" data-length=""></textarea>
                <label for="textarea2"></label>
              </div><br>

              <label for="chips1"></label>
              <div class="chips chips-initial" id="chips1"></div>

            </div>

            <div class="mdl-tabs__panel" id="avanzate-panel">

              <div class="row">

                <div class="col l6 s12">
                  <!-- <br><br>Specifica<br><br> -->

                  <br><br>
                  <div class="switch" id="text6-sw">
                    <label>Standard<input type="checkbox"><span class="lever"></span>Inserici</label>
                  </div>
                  <br>

                  <div class="input-field"><label for="text6"></label>
                    <input placeholder="" id="text6" type="text" data-length="" class="validate">
                  </div>

                  <div id="select3-div">
                    <select id="select3">
                    <option value="" disabled selected>Seleziona</option>
                  </select>
                  </div>

                </div>

              </div>

              <div class="row">

                <div class="col l8 s12">
                  <div class="input-field"><i id="text2-img" class="material-icons prefix">person</i>
                    <input id="text2" type="text" data-length=""><label for="text2"></label>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col l12 s12">
                  <div class="input-field"><i id="text3-img" class="material-icons prefix">people</i>
                    <input id="text3" type="text" data-length=""><label for="text3"></label>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col l9 s12">
                  <div class="input-field"><i id="text4-img" class="material-icons prefix">link</i>
                    <input id="text4" type="text" data-length=""><label for="text4"></label>
                  </div><br>
                </div>
                <div class="col l3 s12">
                  <div class="input-field"><i id="text5-img" class="material-icons prefix">movie</i>
                    <input placeholder="ID video Youtube" id="text5" type="text" data-length="" class="validate">
                  </div><br>
                </div>

              </div>

              <div class="row">

                <div class="col l9 s12">
                  <div class="input-field"><i id="text7-img" class="material-icons prefix">info</i>
                    <input id="text7" type="text" data-length=""><label for="text7"></label>
                  </div>
                </div>
                <div class="col l3 s12">
                  <div class="input-field"><i id="text8-img" class="material-icons prefix">schedule</i>
                    <input id="text8" type="number" class="validate" data-length=""><label for="text8" data-error="Inserisci un numero"></label>
                  </div>
                </div>

              </div>

            </div>

            <div class="mdl-tabs__panel" id="evento-panel">

              <br><br>

              <div class="bx--module bx--module--double" style="">
                <div class="bx--module__inner" style="box-shadow:0 2px 2px 0 rgba(0,0,0,0.15);">
                  <div class="bx--module__content">

                        <div class="col l12 s12">Inserisci le date e gli orari<br><br>

                          <div id="event-dates">
                            <div class="moltiplicandum" id="moltiplicandum1">
                              <div class="row">
                                <div class="col l8">
                                  <input id="event-date1" type="text" class="datepicker" placeholder="Data (dd mm yy)">
                                </div>
                                <div class="col l4">
                                  <input id="event-time1" type="text" class="timepicker" placeholder="Ora (hh:mm)">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col l6 offset-l6">
                            <button id="addicon-date" class="bx--btn bx--btn--secondary" type="button">
                            Data
                            <svg class="bx--btn__icon" width="16" height="16" viewBox="0 0 16 16" fill-rule="evenodd">
                              <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm4 9H9v3H7V9H4V7h3V4h2v3h3v2z"></path>
                            </svg>
                          </button>
                          </div>

                        </div>

                      </div></div></div> <!-- close bx--module -->

            </div>

            <div class="mdl-tabs__panel" id="media-panel">

              <br><br>

              <!-- <div class="row"> -->

                        <div class="bx--module bx--module--double" style="">
                          <div class="bx--module__inner" style="box-shadow:0 2px 2px 0 rgba(0,0,0,0.15);">
                            <div class="bx--module__content">
                              <p>
                                <form id="upload" method="post" action="api/UploadFiles.php" enctype="multipart/form-data">
                                  <fieldset id="uploadfield">
                                    <div id="drop">Rilascia i file qui o...<br><br>
                                      <a class="bx--btn bx--btn--secondary">Scegli i file</a>
                                      <input type="file" name="uplimg" />
                                    </div>
                                    <ul class="put-files-here" id="uploadlist">
                                    </ul>
                                  </fieldset>
                                </form>
                                <section class="bx--order-footer">
                                  <p class="bx--order-footer-text">Attenzione, caricamento istantaneo: eventuali file con lo stesso nome verranno sostituiti.<br><br>Immagini supportate: jpg, png, gif.<br>File supportati: pdf, mp3.</p>
                                </section>
                              </p>
                            </div>
                          </div>
                        </div>

                <!-- </div> -->

            </div>

          </div>
          <!-- END TABS -->

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


      </div><br><br><br><br><br>
      <!-- End content -->
    </main>

  </div>
  <!-- End fade content -->

  <footer class="main-footer">
    <button class="bx--btn bx--btn--primary" style="width:130px;margin-top:11px;" type="submit" id="publish-post"></button>
    <button class="bx--btn bx--btn--secondary" style="width:130px;margin-top:11px;" type="submit" id="save-draft"></button>
    <span class="post-updates">
      <span id="posted"></span>
      &ensp;&ensp;&ensp;
      <span id="updated"></span>
    </span>
    <i class="material-icons toggle-assistant">forum</i>
  </footer>

  <script>
    loadingProcess("#fade-loader", ".fade-page");
  </script>

</body>

</html>
