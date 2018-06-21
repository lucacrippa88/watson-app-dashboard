/*
 * Main variables
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
var root = "nuovo/";
var admin_page = "nuovo/admin";
var version = "v 0.3"; // set correct version


/*************************************
 * Generic functions ©
 * Requires: nothing
 * Author: Luca Crippa - luca.crippa88@gmail.com
 *************************************/


/*
 * Function: createHead ©
 * Returns: head delle pagine - inclusione di utilities, pagine css e titolo tab browser
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: March 2017
 */
function createHead(){
	var met_sta = ["<meta http-equiv='X-UA-Compatible' content='IE=edge'><meta name='viewport' content='width=device-width, initial-scale=1.0'><meta name='ROBOTS' content='INDEX,FOLLOW'><meta name='GOOGLEBOT' content='ARCHIVE'>"];
	var css_ico = ["<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>"]; // css per Material Design Icons
	var css_def = ["<link rel='stylesheet' type='text/css' href='css/default.css'/>"]; // css default (reset)
	var css_swa = ["<link rel='stylesheet' type='text/css' href='css/sweetalert2_mine.css'/>"]; // css per SweetAlert2
	var css_mat = ["<link rel='stylesheet' type='text/css' href='css/material-design.css' media='screen,projection'/>"]; // css per Material Design
	var js_swal = ["<script src='js/sweetalert2_mine.js'>"];
	// var js_mat = ["<script src='js/materialize.min.js'>"];
	// var js_mdl = ["<script src='js/material-lite.js'>"];
	var title = ["<title>Dashboard</title>"];
	// var headfull = met_sta.concat(css_ico, css_def, css_swa, css_mat, js_swal, js_mat, js_mdl, title);
	var headfull = met_sta.concat(css_ico, css_def, css_swa, css_mat, js_swal, title);
	$('head').append(headfull);
}


/*
 * Function: loadingProcess ©
 * Returns: sistema di loading delle pagine
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: June 2017
 */
function loadingProcess(loader, IDcontent){
	window.onload = function(){
		setInterval(function(){
			$(loader).fadeOut();
			$(IDcontent).fadeTo("slow", 100);
		}, 2000);
	}
}


/*
 * Function: insertVersion ©
 * Returns: set the AZ version in the app drawer
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: May 2018
 */
function insertVersion() {
	$("#version").html(version);
}


/*************************************
 * Login page ©
 * Requires: 1 input text id=username, 1 input password id=password, 1 div class=show-password, 1 button submit id=login
 * Author: Luca Crippa - luca.crippa88@gmail.com
 *************************************/


/*
 * Function: mainLogin ©
 * Returns: unica funzione da includere nella pagina di login
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function mainLogin(){
  $('body').on("click","#login",function(){ requestLogin(); });
  $('body').on("click",".show-password",function(){ showPassword(); });
  showPasswordIcon();
}


/*
 * Function: showPasswordIcon ©
 * Returns: mostra l'icona di show password
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function showPasswordIcon() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        $(".show-password").text("visibility");
    } else {
        $(".show-password").text("visibility_off");
    }
}


/*
 * Function: showPassword ©
 * Returns: mostra la password se l'icona show password è cliccata
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        showPasswordIcon();
    } else {
        x.type = "password";
        showPasswordIcon();
    }
}


/*
 * Function: errorPage ©
 * Returns: mostra la password se l'icona show password è cliccata
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function errorPage() {
  $(document).ready(function(){
    swal({
      title: "Errore",
      html: "Effettua il login per visualizzare la pagina.<br><br>",
      type: "error",
      showCloseButton: false,
      showCancelButton: true,
      showConfirmButton: false,
      buttonsStyling: false,
      customClass: 'modal-container',
      cancelButtonClass: 'bx--btn bx--btn--primary',
      cancelButtonText: 'Login'
    }).then(function () {
      window.location.replace('/'+admin_page+'/login');
    });
  });
}


/*
 * Function: requestLogin ©
 * Returns: richiede l'autorizzazione per effettuare il login
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function requestLogin() {
  var api = '../../'+root+'admincfg/CheckLogin.php';
  var username = $('#username').val();
  var password = $('#password').val();

  $.ajax(
  {
    url: api,
    type: 'POST',
    data: { u: username, p: password },
    dataType: 'json',
    async: true,
    success: function(result){

      if(result.Response.login == "approved"){

        swal({
          title: "Benvenuto!",
          html: "Login effettuato, a breve sarai reindirizzato.<br><br>",
          type: "success",
          showCloseButton: false,
          showCancelButton: false,
          showConfirmButton: false,
          allowOutsideClick: false,
          customClass: 'modal-container',
          timer: 3000
        }).then((result) => {
          window.location.replace('/'+admin_page+'/dashboard.php');
        });
      } else {
        swal({
          title: "Errore",
          html: "Nome utente o password errati.<br><br>",
          type: "error",
          showCloseButton: false,
          showCancelButton: true,
          showConfirmButton: false,
          buttonsStyling: false,
          customClass: 'modal-container',
          cancelButtonClass: 'bx--btn bx--btn--primary',
          cancelButtonText: 'Riprova'
        }).then(function () {
          window.location.replace('/'+admin_page+'/login');
        });
      }

    }

  }); // end of ajax call

}


/*
 * Function: showContainer ©
 * Returns: funzione da includere per richiedere il login per visitare la pagina
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function showContainer(){
  $(".container").css("visibility", "visible");
}


/*
 * Function: protectPage ©
 * Returns: funzione da includere per richiedere il login per visitare la pagina
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function protectPage(){
$(document).ready(function(){
    var api = 'api/SessionStatus.php';

    $.ajax(
    {
      url: api,
      type: 'POST',
      dataType: 'json',
      async: false,
      success: function(result){

        if(result.Response.status != null){
          // login ok: let page load and show content...
          showContainer();
          // console.log("sei loggato!");
        } else {
          window.location.replace('/'+admin_page+'/errore');
          // console.log("non sei loggato...");
        }

      }

    }); // end of ajax call
});
}


/*
 * Function: requestLogout ©
 * Returns: funzione da includere per richiedere il logout dall'area riservata
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function requestLogout(){
  // $('body').on("click","#logout",function(){
  $(document).ready(function(){

    // console.log("logout requested!");

    var api = 'api/PerformLogout.php';

    $.ajax(
  	{
  		url: api,
  		type: 'POST',
  		dataType: 'json',
  		async: true,
  		success: function(result){

        // console.log(result.Response.logout);

        if(result.Response.logout = "loggedout"){
          swal({
            title: "Logout effettuato",
            html: "Puoi continuare a navigare nel sito.<br><br>",
            type: "success",
            showCloseButton: false,
            showCancelButton: true,
            showConfirmButton: false,
            buttonsStyling: false,
            customClass: 'modal-container',
            cancelButtonClass: 'bx--btn bx--btn--primary',
            cancelButtonText: 'Ok'
          }).then(function () {
						window.location.replace("/") // redirect after clicking "ok"
					});
        } else {
          window.location.replace('/'+admin_page+'/errore');
        }

  		}

  	}); // end of ajax call


  });
}



/*************************************
 * Watson Assistant functions ©
 * Requires: nothing
 * Author: Luca Crippa - luca.crippa88@gmail.com
 *************************************/


/*
 * Function: chatWA ©
 * Returns: sends message to the backend and gets result
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: April 2018
 */
function chatWA(message){

	var api = "api/ChatBot.php"; // Backend api URl
	var context = ""; // Context of the conversation

  $.ajax({
    url: api,
    type: 'post',
    dataType: 'json',
    data: {
      message: message,
      context: context
    },
    timeout: 5000 // Wait (ms) to check new message arrival from Watson Assistant
  }).done(function(response) {
    // Check the result
    if(response.error) { // Timed-out (no answer from Watson Assistant): display error
      $('#messages').append('<p>Non ho capito. Mi rimanderesti il tuo messaggio?</p>');
    } else { // Succeeded: display message
			// Clear the input element
      $("#input-ask").val("");
			// Gray out all old messages (both from and to Watson Assistant)
      $('.latest').removeClass("latest");
			// Display the new message from Watson Assistant
      $('#messages').append('<p class="from-watson latest">'+JSON.parse(response).output.text+'</p>');
			// Animation of chat panel: scroll down to the new message from Watson Assistant
      $('#virtual-assistant').animate({ scrollTop: $("#messages p").last().offset().top }, 'slow');
      // Upodate the conversation context
      context = JSON.stringify(JSON.parse(response).context);
			// Call function to retrieve conversation context
      getWAData(context);
    }
  }).fail(function () {
    // Failed (Watson Assistant error): display a error message
    $('#messages').append('<p>Non ho capito. Mi rimanderesti il tuo messaggio?</p>');
  });

}


/*
 * Returns: implements conversation with Watson Assistant
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: April 2018
 * Requires: chatWA ©
 */
$(function(){
  chatWA(""); // Initialization of the chatbot
  // Send a Message, When the form will be submitted
  $("#chat-form").submit(function(e){
    e.preventDefault(); // Prevent the form submission
    if($("#input-ask").val()){
			// Send the message to Watson Assistant by calling chatWA function
      chatWA($("#input-ask").val());
			// Display the message to Watson Assistant
      $('#messages').append('<p class="to-watson">' + $("#input-ask").val() + '</p>');
			// Animation of chat panel: scroll down to the new message to Watson Assistant
      $('#virtual-assistant').animate({ scrollTop: $("#messages p").last().offset().top }, 'slow');
    }
  })
})


/*
 * Function: generatePie ©
 * Returns:
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: January 2018
 */
function generatePie(num) {

  const data = [
    ['Gryffindor', 23],
    ['Slytherin', 12],
    ['Ravenclaw', 19],
    ['Hufflepuff', 15],
    ['Teachers', 5]
  ];

  const radius = 96;
  const width = radius * 2;
  const height = radius * 2;

  const svg = d3.select('svg')
    .attr('width', width)
    .attr('height', height)
    .append('g')
    .attr('id', 'group-container' + num)
    .attr('transform', `translate(${width / 2}, ${height / 2})`);

  const color = d3.scaleOrdinal(['#3b1a40', '#473793', '#3c6df0', '#00a68f', '#56D2BB']);

  const pie = d3.pie()
    .sort(null)
    .value((d) => d[1]);

  const path = d3.arc()
    .outerRadius(radius - 10)
    .innerRadius(radius - 40);

  const pathTwo = d3.arc()
    .outerRadius(radius)
    .innerRadius(radius - 40);

  const arc = svg.selectAll('.arc')
    .data(pie(data))
    .enter().append('g')
    .attr('class', 'arc')

  arc.append('path')
    .attr('d', path)
    .attr('fill', (d, i) => color(i))
    .attr('stroke-width', 2)
    .attr('stroke', '#FFFFFF')
    .on('mouseover', function(d) {
      d3.select(this)
        .transition()
        .style('cursor', 'pointer')
        .attr('d', pathTwo);

      const tooltip = d3.select('#tooltip' + num)
        .style('display', 'inherit');

      const amount = d3.select('#amount' + num);
      const item = d3.select('#item' + num);

      amount
        .text(`${d.data[1]}`);

      item
        .text(`${d.data[0]}`);
    })
    .on('mouseout', function(d) {
      const tooltip = d3.select('#tooltip' + num)
        .style('display', 'none')

      d3.select(this)
        .transition()
        .attr('d', path);
    });

}
