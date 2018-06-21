<?php
/*
 * API: ChatBot ©
 * Features: sends and retrieves messages from / to Watson Assistant via cURL
 * Author: Luca Crippa - luca.crippa88@gmail.com
 * Date: April 2018
 */

  if(isset($_POST['message'])){
    // ID of Watson Assistant Workspace
    $workspace_id = '';
    // Release date of the API version in YYYY-MM-DD format
    $release_date = '2018-02-16';
    // Username of the service credentials
    $username = '';
    // Password of the service credentials
    $password = '';

    // Make a request message for Watson API in json
    $data['input']['text'] = $_POST['message'];
    if(isset($_POST['context']) && $_POST['context']){
      $data['context'] = json_decode($_POST['context'], JSON_UNESCAPED_UNICODE); // Encode multibyte Unicode characters literally (default is to escape as \uXXXX)
    }
    $data['alternate_intents'] = false;
    $json = json_encode($data, JSON_UNESCAPED_UNICODE);

    // Post the json to Watson Assistant API via cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://gateway.watsonplatform.net/conversation/api/v1/workspaces/'.$workspace_id.'/message?version='.$release_date);
    curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
    curl_setopt($ch, CURLOPT_POST, true );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    // Prepare response, close curl and send response to front-end
    $result = trim( curl_exec( $ch ) );
    curl_close($ch);
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
  }

?>
