<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function index(){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                ���� ���� ������
            </body>
        </html>
        ';
    }
    function get($id){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8"/>
            </head>
            <body>
                ���� '.$id.'
            </body>
        </html>
        ';
    }
}
?>